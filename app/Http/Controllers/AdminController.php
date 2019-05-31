<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    public function login(Request $request){

        if($request->isMethod('post')){
            $data = $request ->input();

            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'admin'=>'1'])){
                //echo "success";die;
                return redirect ('admindashboard');
            }else{
               // echo "failed";die;

               return redirect('/admin')->with('flash_message_error','Invalid Username or Password');
            }
        }

        return view ('admin.admin_login');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function logout(){
       // Auth::logout();
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out successfully');
    }

    public function settings(){
        return view('admin.settings');
    }
}
