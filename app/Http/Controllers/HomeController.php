<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('utente');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('utente.home');
    }


    public function dados()
    {
    
        $users = Auth::user();
        if($users->id == Auth::id()){
        return view('utente.dados', compact('users'));
    }
    else 
    {
        return view ('utente.home');
    }
}
}
