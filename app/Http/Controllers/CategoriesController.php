<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    function category(){
        return view('page.category');
    }

    function categoryAdd(){
        return view('page.categoryAdd');
    }

    function categoryAddCore(Request $request){
       $categoryName= $request->categoryName;

       $insert=DB::table('categories')->insert([
        'categoryName'=>$categoryName

       ]);
       return back()->with('success','Category Add Success');

    }
}
