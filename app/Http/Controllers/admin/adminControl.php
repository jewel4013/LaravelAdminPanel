<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class adminControl extends Controller
{
    public function layout(){
        return view('layout.layout');
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            $rule = [
                'email' => 'required|email|max:255',
                'password' => 'required|max:30',
            ];
            $validationMsg = [
                'email.required' => 'Email is required',
                'email.email' => 'Valid email required',
                'email.max' => 'Email must be 255 charecters',
                'password' => 'Password is required',
            ];
            $this->validate($request, $rule, $validationMsg);
            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                return redirect('admin/dashboard');
            }else{
                return back()->with('err_msg', 'Email or Password worng');
            }
        }
        return view('layout.adminLogin');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }

    public function update_pass(){
        return view('layout.updateAdminPass');
    }
}
