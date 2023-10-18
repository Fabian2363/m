<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    
    function submit(Request $req)
    {
       $req->session()->flash('data' ,$req->input('user'));
       return redirect('home');
//
    }
}
