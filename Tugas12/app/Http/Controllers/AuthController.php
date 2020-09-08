<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(){
        return view('form');

    }

    public function welcome(Request $request){
        // dd($request->first_name);
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        return view('welcome', compact('first_name','last_name'));
    }
}
