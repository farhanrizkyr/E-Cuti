<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
class UserStaffController extends Controller
{


         function __construct()
  {
    $this->middleware('auth');
     $this->middleware('staff');
  }
   public function index($value='')
   {
      return view('Staff.user_staff');
   }


   function edit($username)
   {
    $data=User::where('username',$username)->first();
      return view('Staff.edit_user_staff',compact('data'));
   }

     public function update($id)
   {
       Request()->validate([
     'name'=>'required',
     'username'=>'required',
     'email'=>'required|email',
    ]);

    User::find($id)->update(Request()->all());
    return redirect('/staff-pengaturan/')->with('pesan','User Berhasil DiUpdate');
   }

}
