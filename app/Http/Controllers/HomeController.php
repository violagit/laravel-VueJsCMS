<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    { 
        if($request->user()->hasAnyRole(['user','admin']) == false){ 
            $request->user()->roles()->attach(\App\Role::where('name', 'user')->first());
        }
        if ($request->user()->hasRole('user')){
            return view('home');
        }
        
        if($request->user()->hasRole('admin')){
            return redirect('/admin/dashboard');
        }         
    }
    public function userView(){
        return view('home');
    }
}
