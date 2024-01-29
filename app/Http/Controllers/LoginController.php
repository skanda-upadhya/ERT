<?php

namespace App\Http\Controllers;

use App\Models\Login;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('zones.login');
    }
    public function create()
   
    {
     return view('zones.create');
    }
   
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'Email' => 'required',
            'Password' => 'required',
        ]);
    
        Login::create([
            'email' => $request->Email,
            'password' => $request->Password,
        ]);
    
        return redirect()->route('zones.dashboard')
     ->with('success', 'Login  successfully.');
 
    }
 
}

