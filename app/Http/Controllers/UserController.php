<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewUserProfile(Request $request){
        return view('user');
    }
}
