<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentsUserController extends Controller
{
    public function showIndex(){
        return view('components_user.index');
    }
    public function showUser1(){
        return view('components_user.user1');
    }
}
