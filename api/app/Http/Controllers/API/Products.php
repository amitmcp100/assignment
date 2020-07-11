<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
class Products extends Controller
{
    //

    public $successStatus = 200;

    function save(Request $req) 
    {
        //return Product::all();
        $product = New Product;
        $product->name = $req->name;
        $product->category = $req->category;
        $product->price = $req->price;
        //echo $product->save();
        if($product->save())
        {
            $success['msg'] = "Product has been save";
            return response()->json(['success' => $success], $this-> successStatus); 
        } else {
            return response()->json(['error'=>'Unauthorised'], 401); 
        }

    }

    function update(Request $req)
    {
        $product = Product::find($req->id);
        $product->category=$req->category;
        if($product->save()){
            return ['Result' => "success", "msg"=>"data is updated"];
        }
    }

    public function details() 
    { 
    $products = Product::all();
    return Product::all();
    //return response()->json(['success' => $products], $this-> successStatus); 
    } 


}
