<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }
    public function ourfilestore(Request $request){
        return $request ->name;
    }
}
