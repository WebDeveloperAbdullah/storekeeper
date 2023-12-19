<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
  public  function product(){
        $data=DB::table('products')->get();
        return view('admin.page.products.product',compact('data'));
    }

 public   function productAdd(){
        return view('admin.page.products.productAdd');
    }

   public function productStore(Request $request){
        
        
        $this->validate($request,[
            'title'=>'required|max:200',
            'price'=>'required|max:50',
            'stock'=>'required|max:50'

        ]);
        DB::table('products')->insert([
            'title' => $request->productName,
            'price' => $request->productPrice,
            'stock' => $request->productStock

        ]);

          return back()->with('success','Product Add Success');
    }


    public function productDetail($id){
        $data=DB::table('products')->where('id',$id)->get();
        return view('admin.page.products.productDetail',compact('data'));

    }

    
    public function productEdit($id){
        $data=DB::table('products')->where('id',$id)->get();

        return view('admin.page.products.productEdit',compact('data'));

    }

    public function productStoreCore(Request $request,$id){
        DB::table('products')->where('id',$id)->update([
            'title' => $request->productName,
            'price' => $request->productPrice,
            'stock' => $request->productStock

        ]);

        return redirect()->back()->with('success','Product update Sucess');

    }

}
