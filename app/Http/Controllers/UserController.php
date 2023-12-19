<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function reaisterView(){
        return view('admin.page.reaister');
    }

    function reaister(Request $request){
        $userName=$request->userName;
        $userEmail=$request->userEmail;
        $userPassword=$request->password;

        $insertQuery=DB::table('users')->insert([
             'userName'=>$userName,
             'userEmail'=>$userEmail,
             'userPassword'=>$userPassword
            ]);

            return back()->with('success','Register Successfully');

    }
}
