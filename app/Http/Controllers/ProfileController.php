<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        return view('welcome',[
            'profiles' => Profile::all(),
        ]);
    }
}
