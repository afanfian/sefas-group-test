<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(){
        return view('profile.index',[
            'profiles' => Profile::all(),
        ]);
    }

    function create(){
        return view('profile.create');
    }

    function store(Request $request){
        // Panggil model Profile dan jalankan method create
        Profile::create($request->except('_token', 'submit'));
        return redirect('/profile');
    }
}
