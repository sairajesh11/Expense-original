<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
// use DB;
use App\Models\user;
use App\Models\formBasic;
use App\Http\Controllers\CustomAuthController;
use Auth;


class FormController extends Controller
{
    //view page
    // public function index()
    // {
    //     // $data = formBasic::user()->data;
    //     $email = Auth::email();
    //     // $user_email = Auth::user()->email;
    //     $data = formBasic::where('email',$email)->first();
    //     return view('form',compact('data'));
    //     // $users = formBasic::all();
    //     // return response()->json(['users'=>$users], 200);
    // }


    public function index()
    {
            $email = Auth::user()->email;
            $data = DB::table('form_basics')->where('email',$email)->latest()->paginate(10);
            return view('dashboard',compact('data'));
            return view('form');


            
        // print_r($data);
        // return view('form',['form_basics'=>$data]);

        // $user_email = auth()->user();
        // $data = formBasic::where('email',$user_email)->first();
        // return view('form',compact('data'));
        // $users = formBasic::find($id);
        // return response()->json(['users'=>$users], 200);
        // $user = auth()->user();
        // print_r($user->email);
        // $user = get_user_by('email', $id);
        // $user = Auth::user()->$id;
        // $id = $user->id;
        // $data = formBasic::where('id', $id)->first();
        // return view('form',compact('data'));

        // if (is_email($id)) {
        //     $user = get_user_by('email', $id);
        //     $id = $user->ID;
        // }
        // $formBasic = formBasic::where('id',1)->get();
        // $data = json_decode($formBasic[0] ['email']);
        // print_r($data);
        
       


    }
    

    // save record
    public function saverecord(Request $request)
    {
            foreach($request->empname as $key=>$insert) {

                $saveRecord = [

                    'email'=>$request->email[$key],
                    'empname'=>$request->empname[$key],
                    'phone'=>$request->phone[$key],
                    'expense'=>$request->expense[$key],
                    'amount'=>$request->amount[$key],
                    'currency'=>$request->currency[$key],
                    'empid'=>$request->empid[$key],
                    'date'=>$request->date[$key]
                ];
                DB::table('form_basics')->insert($saveRecord);
            }
        return redirect('form/new')->with('message', 'success!');
    }

}

