<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $title  = "Home";
        return view('components.web.index',compact(
            "title"
        ));
    }
}
