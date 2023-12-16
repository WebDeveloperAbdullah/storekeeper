<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BrandsController extends Controller
{
    function brands(){
        return view('page.brands');
    }

    function brandAdd(){
        return view('page.brandAdd');
    }

    function brandAddCore(Request $request){
        $brandName= $request->brandName;

        $insert=DB::table('brands')->insert([
         'brandName'=>$brandName
 
        ]);
        return back()->with('success','Category Add Success');

    }
}
