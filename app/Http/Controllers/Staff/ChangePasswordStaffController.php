<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\UbahPasswordStaff;
use App\Models\User;
use Hash;
class ChangePasswordStaffController extends Controller
{
   
   function __construct()
  {
    $this->middleware('auth');
     $this->middleware('staff');
  }

   public function index()
  {
     return view('Staff.password');
  }

   public function update(Request $request)
   {
       $request->validate([
            'password' => ['required', new UbahPasswordStaff],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect('/staff-pengaturan')->with('pesan','Password Berhassil Di Ubah');
   }
}
