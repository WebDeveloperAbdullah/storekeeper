<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    function product(){
        return view('page.product');
    }

    function productAdd(){
        return view('page.productAdd');
    }

    function productAddCore(Request $request){
        $productName=$request->productName;
        $short_des=$request->short_des;
        $productImage=$request->productImage;
        $productPrice=$request->productPrice;
        $productStock=$request->productStock;
        $productEnum=$request->productEnum;
        $category_id=$request->category_id;
        $brand_id=$request->brand_id;

        $insert=DB::table('')->insert([
            'title'=>$$productName,
            'short_des'=>$short_des,
            'productImage'=>$productImage,
            'price'=>$productPrice,
            'stock'=>$productStock,
            'remark'=>$productEnum,
            'category_id'=>$category_id,
            'brand_id'=>$brand_id

        ]);

        return back()->with('success','Product Add Success');
    }

}
