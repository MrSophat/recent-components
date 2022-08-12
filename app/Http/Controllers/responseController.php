<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class responseController extends Controller
{
    public static function success($result){

        return response()->json(
            [
                'status' => 200,
                'result'=> $result
            ],200
        );
    }

    // class reponse  client error
    public static function client($result){
        return response()->json(
            [
                'status' => 400,
                'result'=> $result
            ],400
        );
    }

    // class reponse  code  error
    public static function error($result){
        return response()->json(
            [
                'status' => 500,
                'result'=> $result
            ],500
        );
    }
}
