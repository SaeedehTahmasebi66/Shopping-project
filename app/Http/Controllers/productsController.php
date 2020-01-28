<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsController extends Controller
{
    public function showAllProducts(){

        return view('shop');
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
