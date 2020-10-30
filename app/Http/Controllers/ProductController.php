<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    public static function getProducts(){
        return Product::all();
    }

    public function removeProduct($id){
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect('/');
    }

    public function details($id){
        $product = Product::findOrFail($id);

        return View('ProductDetails')->withTask($product);
    }

    public function EditProductView($id){
        $product = Product::findOrFail($id);

        return View('ProductCreate')->withTask($product);
    }

    public function EditProduct($id, Request $request){
        $product = Product::findOrFail($id);

        $this->validate($request,[
            'price' => 'required|min:0.10',
            'amount' => 'required|min:0',
            'discription' => 'required'
            ]);

            $input = $request->all();

            $product->fill($input)->save();

            return redirect('/');
    }

    public function addProduct(Request $request){
        $this->validate($request,[
            'productname' => 'required|min:4',
            'price' => 'required|min:0.10',
            'amount'=> 'required|min:0',
            'discription' => 'required'
        ]);

        $product = Product::create(request(['productname','price','amount','discription']));
        
        return redirect('/');
    }
}