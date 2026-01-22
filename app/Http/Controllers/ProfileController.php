<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        
        // Jika user tidak ada, redirect ke login
        if (!$user) {
            return redirect('/login')->with('error', 'Silakan login terlebih dahulu');
        }
        
        return view('profile', compact('user'));
    }
}
