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


     
    public function index()
    {
        return view('components.admin.form');
    }

    public function modal()
    {
        return view('components.admin.modal.index');
    }

    public function modalDemo()
    {
        return view('components.admin.modal.demo');
    }

    public function tabs()
    {
        return view('components.admin.tabs.index');
    }

    public function tabsDemo()
    {
        return view('components.admin.tabs.demo');
    }
}
