<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
    }

    public function productDetail($productCategory, $productName)
    {
        if ($productCategory == 'nshield-hsm') {
            if ($productName=="nshield-connect") {
                return view('products.product_nshield_connect');
            } elseif ($productName=="nshield-edge") {
                return view('products.product_nshield_edge');
            } elseif ($productName=="nshield-solo") {
                return view('products.product_nshield_solo');
            }
        } elseif ($productCategory == 'nshield-software') {
            if ($productName=="code-safe") {
                return view('products.product_nshield_code_safe');
            }
        } else {
            if ($productName=="management-and-monitoring") {
                return view('products.product_nshield_monitor');
            }
        }
        
        
    }
}
