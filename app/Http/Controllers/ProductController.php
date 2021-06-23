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
        return view('product_detail');
    }

    public function productDetail2($id)
    {
        return view('product_detail2');
    }

    public function productDetail3($id)
    {
        return view('product_detail3');
    }
}
