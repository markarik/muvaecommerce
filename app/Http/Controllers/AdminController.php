<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;
use App\User; 
use Hash;

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


    public function updatepassword(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();

            // dd($    data);

            $check_password= User::where(['email'=>Auth::User()->email])->first();
            $current_password = $data['current_pwd'];

            if(Hash::check($current_password, $check_password->password)){
                $password=bcrypt($data['new_pwd']);

                user::where('id','1')->update(['password'=>$password]);
               // dd('$password');

                return redirect('/admin/settings')->with('flash_message_success','Password updated successfully');
            }else {
               return redirect('/admin/settings')->with('flash_message_error','Password Not updated ');
            }
            
        }

    }
}
