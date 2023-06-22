<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
class RegisterController extends Controller
{
     function __construct()
  {
    $this->middleware('auth');
     $this->middleware('admin');

  }
  
   public function index()
   {
      $users=User::latest()->get();
      return view('Admin.adduser',compact('users'));
   }

   public function store($value='')
   {
       Request()->validate([
        'name'=>'required',
        'role'=>'required',
        'email'=>'required|unique:users|email:dns',
        'username'=>'required',
        'password'=>'required|confirmed',

       ]);

       User::create([
        'name'=>request()->name,
        'username'=>request()->username,
        'role'=>request()->role,
        'email'=>request()->email,
        'password'=>Hash::make(request()->password),
       ]);
       return redirect('/register-akun')->with('pesan','User Berhasil Di Buat');
   }

   public function destroy($id)
   {
      $data=User::find($id);
     $data->delete();
      return redirect('/register-akun');
   }
}
