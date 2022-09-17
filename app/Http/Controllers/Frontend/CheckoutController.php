<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index() //to delete cart product if exceeds the quantity as per stored in database
    {
        $old_cartitems=Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitems as $item){
            if(!Product::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists()){

                $removeItem=Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems=Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartitems'));
    }


    /*
        to add details of checkout form and update too
        and show order details of cart added products and
        and to place products to order
    
    */
    public function placeorder(Request $request){

        $order=new Order();
        $order->user_id=Auth::id();
        $order->fname=$request->input('fname');
        $order->lname=$request->input('lname');
        $order->email=$request->input('email');
        $order->phone=$request->input('phone');
        $order->address1=$request->input('address1');
        $order->address2=$request->input('address2');
        $order->city=$request->input('city');
        $order->state=$request->input('state');
        $order->country=$request->input('country');
        $order->pincode=$request->input('pincode');
      



        $total=0;
        $cartitems_total=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems_total as $prod){
            $total += $prod->products->selling_price * $prod->prod_qty;
        }

        $order->total_price=$total;

        $order->tracking_no=rand(1111,9999);  
        $order->save();

        
        //to add cart items to orderItems table
        $cartitems=Cart::where('user_id',Auth::id())->get();
        foreach($cartitems as $item)
        {
            OrderItem::create([
                'order_id' => $order->id,
                'prod_id'=> $item->prod_id,
                'qty' => $item->prod_qty,
                'price'=> $item->products->selling_price,
                

            ]);

            $prod=Product::where('id',$item->prod_id)->first();
            $prod->qty=$prod->qty - $item->prod_qty;
            $prod->update();
        }

        

        if(Auth::user()->address1 == NULL || Auth::user()->address2 == NULL )
        {
            $order=Order::where('user_id',Auth::id())->first();
            $order->fname=$request->input('fname');
            $order->lname=$request->input('lname');
            $order->phone=$request->input('phone');
            $order->address1=$request->input('address1');
            $order->address2=$request->input('address2');
            $order->city=$request->input('city');
            $order->state=$request->input('state');
            $order->country=$request->input('country');
            $order->pincode=$request->input('pincode');
            $order->update();
        }

        $cartitems=Cart::where('user_id',Auth::id())->get();
        Cart::destroy($cartitems);



        return redirect('/')->with('status','Order Placed Successfully');
    }
}
