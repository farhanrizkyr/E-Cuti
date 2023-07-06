<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function __construct()
  {
    $this->middleware('auth');
     $this->middleware('admin');

  }

  public function index($value='')
  {
    return view('Admin.user');
  }

  public function edit($username)
  {
    $data=User::where('username',$username);
    return view('Admin.edit_user',compact('data'));
  }


  public function update($id)
  {
    Request()->validate([
     'name'=>'required',
     'username'=>'required',
     'email'=>'required|email',
    ]);

    User::find($id)->update(Request()->all());
    return redirect('/admin/pengaturan')->with('pesan','User Berhasil DiUpdate');
  }
  
}
