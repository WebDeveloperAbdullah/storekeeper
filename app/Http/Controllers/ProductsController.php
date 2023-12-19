<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    function product(){
        $data=DB::table('products')->get();
        return view('admin.page.products.product',compact('data'));
    }

    function productAdd(){
        return view('admin.page.products.productAdd');
    }

    function productAddCore(Request $request){
        $productName=$request->productName;
        $productPrice=$request->productPrice;
        $productStock=$request->productStock;
        $productImage=$request->productImage;
        $category_id=$request->category_id;
        $brand_id=$request->brand_id;
        $this->validate($request,[
            'title'=>'required|string|max:200',
            'stock'=>'required|integer|max:50',
            'price'=>'required|decimal|max:50',
            'productImage'=>'required|string|image|mines:png,jpg,gif,svg|max:10000',
            'category_id'=>'required|integer|max:50',
            'brand_id'=>'required|integer|max:50',

        ]);
       

        DB::table('products')->insert([
            'title'=>$productName,
            'stock'=>$productStock,
            'price'=>$productPrice,
            'productImage'=>$productImage,
            'category_id'=>$category_id,
            'brand_id'=>$brand_id

        ]);

        return back()->with('success','Product Add Success');
    }

}
