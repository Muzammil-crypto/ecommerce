<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;
class UsersController extends Controller
{
    public function userLoginRegister(){
        return view('wayshop.users.login_register');
    }
    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
                return redirect()->back()->with('flash_message_error','Email is already exist');
            }else{
                //adding user in table
                $user = new User;
                $user->name = $data['name'];
                $user->email = $data['email'];
                $user->password = bcrypt($data['password']);
                $user->save();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    Session::put('frontSession',$data['email']);
                    return redirect('/cart');
            }
        }
    }
}
   public function logout(){
       Session::forget('frontSession');
       Auth::logout();
       return redirect('/');
   }
   public function login(Request $request){
       if($request->isMethod('post')){
           $data = $request->all();
        //    echo "<pre>";print_r($data);die;
        if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
            Session::put('frontSession',$data['email']);
            return redirect('/cart');
        }else{
            return redirect()->back()->with('flash_message_error','Invalid username and password!');
        }
       }
   }
   public function account(Request $request){
       return view('wayshop.users.account');
   }
}
