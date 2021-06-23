<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function productDetail($id)
    {
        if ($id==1) {
            return view('product_detail');
        } elseif ($id==2) {
            return view('product_detail2');
        } else {
            return view('product_detail3');
        }
        
    }
}
