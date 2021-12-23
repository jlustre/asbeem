<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class AdminController extends Controller
{
    public function Index() {
        return view('admin.admin_login');
    }

    public function Dashboard() {
        return view('admin.index');
    }

    public function Login(Request $request) {
        // dd($request->all()); //this is used to dump values from request
        $check = $request->all();
        if (Auth::guard('admin')->attempt([ 'email'=> $check['email'], 'password'=>$check['password'] ])) {
            return redirect()->route('admin_dashboard')->with('success', 'Admin Login Successfully!');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function AdminLogout() {
        Auth::guard('admin')->logout();

        return redirect()->route('admin_login_from')->with('success', 'Admin Logout Successfully!');
    }

    public function AdminRegister() {
        return view('admin.admin_register');
    }

    public function AdminRegisterCreate(Request $request) {
        $validated = $request->validate(
        [
            'name' => 'required|unique:admins|max:25',
            'email' => 'required|unique:admins|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ],
        [
            'name.required' => 'Please input a valid username',
            'email.required' => 'Please input a valid email',
            'password.required' => 'Please input a valid password',
        ]);

       Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('admin_login_from')->with('success', 'Admin Created Successfully!');
        
    }
}
