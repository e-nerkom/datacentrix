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
            } elseif ($productName=="nshield-as-service") {
                return view('products.product_nshield_as_service');
            } else {
                return view('products.product_nshield_hsmi');
            }
        } elseif ($productCategory == 'nshield-software') {
            if ($productName=="code-safe") {
                return view('products.product_nshield_code_safe');
            } else {
                return view('products.product_nshield_software_option_packs');
            }
        } elseif ($productCategory == 'management-and-monitoring') {
            if ($productName=="nshield-monitor") {
                return view('products.product_nshield_monitor');
            } else {
                return view('products.product_nshield_remote_administration');
            }
        } elseif ($productCategory == 'payment') {
            if ($productName == "transconfirm") {
                return view('products.product_trans_confirm');
            }
        } else {
            if ($productName == "key-management-software") {
                return view('products.product_kms');
            }
        }
        
        
    }
}
