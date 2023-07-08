<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserPegawaiController extends Controller
{

       function __construct()
  {
    $this->middleware('auth');
     $this->middleware('pegawai');
  }
   public function index($value='')
   {
      return view('Pegawai.user_pegawai');
   }

   public function edit($username)
   {
      $data=User::where('username',$username)->first();
      return view('Pegawai.edit_user_pegawai',compact('data'));
   }

   public function update($id)
   {
       Request()->validate([
     'name'=>'required',
     'username'=>'required',
     'email'=>'required|email',
    ]);

    User::find($id)->update(Request()->all());
    return redirect('/pegawai-pengaturan/')->with('pesan','User Berhasil DiUpdate');
   }
}
