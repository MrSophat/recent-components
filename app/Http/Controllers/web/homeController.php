<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\web\productTypeModel;

class homeController extends Controller
{
    public function index()
    {
        $productType = productTypeModel::getProductType();
        $title  = "Home";
        return view('components.web.index',compact(
            "title",
            "productType"
        ));
    }
}
