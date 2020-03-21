<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class productsController extends Controller
{
    public function showAllProducts(){

        // return view('shop');
        $products=Product::all();
        return view('index',compact('products'));
    }

    public function product_details(){

        return view ('product-details');
    }

    public function addToCart(){

        //showing number of shop at the button of cart in menu at the top
        //write "add to your cart" instead of  "add to cart" : ajax ???

    }

    public function deleteProducts(){

    }

    public function updateProducts(){

    }

    public function availableProducts(){

    }

}
