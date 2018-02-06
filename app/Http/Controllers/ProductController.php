<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home(){
        return __METHOD__;
    }
    public function create_update($productid = 0){
        $data = array();
        $data['product'] = new \stdclass;
        $data['product']->name = 'Test Product1';
        if($productid == 0){
            $data['title'] = 'Create New Product';
            $data['titledescription'] = 'Fill in the forms below';
        }else{
            $data['title'] = 'Update Product '.$data['product']->name;
            $data['titledescription'] = 'Update product details or add additional data eg. Purchases, quantity';
        }
        return view('products/product',$data);
    }
}
