<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\dress;
use App\Models\type;

class HomeController extends Controller
{
    public function home(){
        $categories = Category::all();
        $dresss = dress::with('product_discount')->get();


        return view('front.pages.home' , compact('dresss' , 'categories' ));
    }



    public function contact(){
        return view('front.pages.contact');
    }


    public function about(){
        return view('front.pages.about');
    }

    public function cart(){
        return view('front.pages.cart');
    }

    public function shop_category($id){
        $dresss = dress::where('maincategory_id' , $id)->paginate(10);
        $types = type::all();
        $categories = Category::all();

        return view('front.pages.shop_category' , compact('dresss' , 'types' , 'categories')  );
    }

    public function shop($id = -1){

        return view('front.pages.shop' , compact('id')  );
    }


    public function detail($id){
        $dress = dress::find($id);
        return view('front.pages.detail' , compact('dress'));
    }


    public function checkout(){
        $cartItems = \Cart::getContent();

        return view('front.pages.checkout' , compact('cartItems'));
    }


        public function thank(){
            return view('front.pages.thank');
        }


}