<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function __construct(){
        $this->middleware('auth:api',['except'=>['login', 'register']]);
    }
    public function vueProduit(){
        return response()->json([
            'data'=>'salut a tous'
        ]);
    }
}
