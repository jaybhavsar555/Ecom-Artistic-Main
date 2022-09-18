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
        $popular_products= Product::where('popular','0')->take(10)->get(); //to show all the products with popular as 0
        $popular_category= Category::where('popular','0')->take(15)->get(); // to show popular categories
         return view('frontend.index',compact('popular_products','popular_category'));
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

    public function viewproduct($cate_slug,$prod_slug)
    {

        if(Category::where('slug',$cate_slug)->exists())
                {
                    if(Product::where('slug',$prod_slug)->exists())
                    {
                            $product=Product::where('slug',$prod_slug)->first();
                        
                            return view('frontend.products.view',compact('product'));
                    }
                    else{

                        return redirect('/')->with('status','The link is broken!!');
                    }
                }
                else{
                    return redirect('/')->with('status','No such Category Found!');
                }

            }


    public function productlistAjax()
    {
        $products=Product::select('name')->where('status','0')->get();
        $data=[];

        foreach ($products as $item) {
            $data[]=$item['name'];
            
        }
        return $data;
    } 

    public function searchProduct(Request $request)
    {
        $search_product=$request->input('search_name_product');
        
        if($search_product!=""){
                $product=Product::where("name","LIKE","%$search_product%")->first();
               
                if($product){

                    return redirect('category/'.$product->category->slug.'/'.$product->slug);
                }
                else{

                    return redirect()->back()->with("status","No Products matched your search");
                }
        }
        else{
            return redirect()->back();
        }
    }

}


