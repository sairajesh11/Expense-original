<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
// use DB;
use App\Models\user;
use App\Models\formBasic;
use App\Http\Controllers\CustomAuthController;
use Auth;


class RequestController extends Controller
{
    
    function show()
    {
            return view('requesthistory');


    }
}