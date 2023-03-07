<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function product(){
        return view('product');
    }
    public function product1(){
        return view('product1');
    }
    public function product2(){
        return view('product2');
    }
    public function product3(){
        return view('product3');
    }
}
