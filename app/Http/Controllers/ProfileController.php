<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // Untuk menampilkan semua data profile
    function index(){
        return view('profile.index',[
            'profiles' => Profile::all(),
        ]);
    }
    // Untuk menampilkan form tambah data profile
    function create(){
        return view('profile.create');
    }
    // Untuk menyimpan data profile baru
    function store(Request $request){
        // Panggil model Profile dan jalankan method create
        Profile::create($request->except('_token', 'submit'));
        return redirect('/profile');
    }
    // Untuk menampilkan form edit data profile
    function edit($id){
        $profile = Profile::find($id);
        return view('profile.edit', compact(['profile']));
    }
    // Untuk menyimpan data profile yang sudah diedit
    function update(Request $request, $id){
        Profile::find($id)->update($request->except('_token', 'submit', '_method'));
        return redirect('/profile');
    }
    // Untuk menghapus data profile
    function destroy($id){
        Profile::destroy($id);
        return redirect('/profile');
    }
}
