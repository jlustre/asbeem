<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class SellerController extends Controller
{
    public function Index() {
        return view('seller.seller_login');
    }

    public function Dashboard() {
        return view('seller.index');
    }

    public function Login(Request $request) {
        // dd($request->all()); //this is used to dump values from request
        $check = $request->all();
        if (Auth::guard('seller')->attempt([ 'email'=> $check['email'], 'password'=>$check['password'] ])) {
            return redirect()->route('seller_dashboard')->with('success', 'Seller Login Successfully!');
        } else {
            return back()->with('error', 'Invalid Email or Password');
        }
    }
    public function SellerLogout() {
        Auth::guard('seller')->logout();

        return redirect()->route('seller_login_from')->with('success', 'Seller Logout Successfully!');
    }

    public function SellerRegister() {
        return view('seller.seller_register');
    }

    public function SellerRegisterCreate(Request $request) {
        $validated = $request->validate(
        [
            'name' => 'required|unique:sellers|max:25',
            'email' => 'required|unique:sellers|max:255',
            'password' => 'required|min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ],
        [
            'name.required' => 'Please input a valid username',
            'email.required' => 'Please input a valid email',
            'password.required' => 'Please input a valid password',
        ]);

       Seller::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);
        
        return redirect()->route('seller_login_from')->with('success', 'Seller Created Successfully!');
        
    }
}

