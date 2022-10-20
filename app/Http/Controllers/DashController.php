<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
// use DB;
use App\Models\user;
use App\Models\formBasic;
use App\Http\Controllers\CustomAuthController;
use Auth;


class DashController extends Controller
{
    //view page
    function show()
    {
            $email = Auth::user()->email;
            $data = DB::table('form_basics')->where('email',$email)->latest()->paginate(10);
            // return formBasic::all();
            return view('dashboard',compact('data'));

    }

}

