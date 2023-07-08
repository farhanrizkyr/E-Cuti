<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\UbahPasswordAdmin;
use App\Models\User;
use Hash;
class ChangePasswordAdmin extends Controller
{
      function __construct()
  {
    $this->middleware('auth');
     $this->middleware('admin');
  }
   public function index()
   {
       return view('Admin.password');
   }

   public function update(Request $request)
   {
       $request->validate([
            'password' => ['required', new UbahPasswordAdmin],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect('/admin/pengaturan')->with('pesan','Password Berhassil Di Ubah');
   }
}
