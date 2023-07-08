<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\UbahPasswordPegawai;
use App\Models\User;
use Hash;
class ChangePasswordPegawaiController extends Controller
{


       function __construct()
  {
    $this->middleware('auth');
     $this->middleware('pegawai');
  }
  public function index()
  {
     return view('Pegawai.password');
  }

   public function update(Request $request)
   {
       $request->validate([
            'password' => ['required', new UbahPasswordPegawai],
            'new_password' => ['required'],
            'confirm_password' => ['same:new_password'],
        ]);
   
        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect('/pegawai-pengaturan')->with('pesan','Password Berhassil Di Ubah');
   }
}
