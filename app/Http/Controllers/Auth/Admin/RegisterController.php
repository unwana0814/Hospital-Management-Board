<?php

namespace App\Http\Controllers\Auth\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
      return view('admin.auth.register');
    }

    public function store(Request $request){
      $request->validate([
        'name'=> 'required',
        'email'=> 'required|',
        'password'=>'required|min:6',
      ]);

      Admin::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
      ]);

      // Auth::attempt($request->only('email', 'password'));

      return redirect()->route('login');
    }
}
