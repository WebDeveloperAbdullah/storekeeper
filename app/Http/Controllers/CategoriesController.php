<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function category(){
        $data=DB::table('categories')->get();
    
        return view('admin.page.categories.category',compact('data'));
    }


    public function categoryDetail($id){
      $data= DB::table('categories')->where('id',$id)->get();

        return view('admin.page.categories.categoryDetail',compact('data'));

    }

  

    public   function categoryAdd(){
        return view('admin.page.categories.categoryAdd');
    }

    public function categoryStore(Request $request){
   
      $this->validate($request,[
        'categoryName'=>'required|string|max:50'
      ]);


      DB::table('categories')->insert([
        'categoryName'=>$request->categoryName
      ]);

      return redirect()->back()->with('success','Created Category Successfully !');

    }

    public function categoryDelete($id){
        DB::table('categories')->where('id',$id)->delete();
        return redirect()->back()->with('success','Catrgory Delete Sucess');
    }

    public function categoryEdit($id){
        $data=DB::table('categories')->where('id',$id)->get();
        return view('admin.page.categories.categoryEdit',compact('data'));

    }

    public function categoryEditCore( Request $request, $id)
    {
        $data=DB::table('categories')->where('id',$id)->update([
            'categoryName'=>$request->categoryName
        ]);

        return redirect()->back()->with('success','Catrgory update Sucess');

    }

}
