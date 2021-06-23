<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function productDetail($productName)
    {
        if ($productName=="nshield-hsm") {
            return view('product_detail');
        } elseif ($productName=="nshield-software") {
            return view('product_detail2');
        } else {
            return view('product_detail3');
        }
        
    }
}
