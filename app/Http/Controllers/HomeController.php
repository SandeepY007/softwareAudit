<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
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
    public function index()
    {
        return view('home');
    }

    public function adminHome(): View
    {
        return view('adminHome');
    }
    
    public function managerHome(): View
    {
        return view('managerHome');
    }

    public function doctorHome():View
    {
        return view('doctorHome');
    }

    public function developerHome():View
    {
        return view('developerHome');
    }
    
    public function marketingHome():View
    {
        return view('marketingHome');
    }
}
