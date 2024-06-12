<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        //return 'kucing';
        return view('user', [
            'name' => 'Dinda',
            'year' => 2003  
        ]);

    }
}
