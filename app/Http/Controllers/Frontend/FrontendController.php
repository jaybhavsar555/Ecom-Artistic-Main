<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class FrontendController extends Controller
{
    
    public function index()
    {
        $featured_products= Product::where('status','0')->take(15)->get(); //to show all the products with status as 0
        $popular_category= Category::where('popular','0')->take(15)->get(); // to show popular categories
         return view('frontend.index',compact('featured_products','popular_category'));
    }
    public function category()
    {
        $category_p= Category::where('status','0')->get();
         return view('frontend.category',compact('category_p'));
    }

    public function viewcategory($slug){


        if(Category::where('slug',$slug)->exists())
        {
                $category=Category::where('slug',$slug)->first(); //take slug value from the url(get method) first()-method it store and return on value at a time.
                $products=Product::where('cate_id',$category->id)->where('status','0')->get(); 
                //select cate_id from cate_id=category->id  where status==0;
                   return view('frontend.products.index',compact('category','products'));
            
        }
        else{
            return redirect('/')->with('status','Slug is not exists!!');
        }

    }
}

