<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
  public  function brands(){

        $data=DB::table('brands')->get();
        return view('admin.page.brands.brands',compact('data'));
    }

    function brandAdd(){
        return view('admin.page.brands.brandAdd');
    }

   public function brandAddCore(Request $request){

        $this->validate($request,[
            'brandName'=>'required|string|max:50'
          ]);

        DB::table('brands')->insert([
         'brandName'=>$request->brandName
 
        ]);
        return back()->with('success','Brands Add Success');

    }
    public function brandDetail($id){
       $data= DB::table('brands')->where('id',$id)->get();
        return view('admin.page.brands.brandDetail',compact('data'));


    }

    public function brandEdit($id){
        $data= DB::table('brands')->where('id',$id)->get();
        return view('admin.page.brands.brandEdit',compact('data'));
    }
    public function brandEditCore(Request $request,$id){
        DB::table('brands')->where('id',$id)->update([
            'brandName'=>$request->brandName
      ]);
           return back()->with('success','Brands Update Success');
    }

    public function brandDelete($id){
        DB::table('brands')->where('id',$id)->delete();
        return redirect()->back()->with('success','Brands Delete Sucess');

    }
}
