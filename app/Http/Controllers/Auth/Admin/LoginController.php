<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('admin.auth.login');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if(!Auth::attempt($request->only('email', 'password'), $request->remember))
        // {
        //     return back()->with('status', 'Invalid login details');
        // };

        return redirect()->route('index');
    }
}
