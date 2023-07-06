<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuti;
class ListCutiController extends Controller
{
  
         function __construct()
  {
    $this->middleware('auth');
     $this->middleware('staff');
  }
   public function index()
   {
     $lists=Cuti::latest()->where('status','belum_diterima')->get();
      return view('Staff.list_cuti_pegawai',compact('lists'));
   }

   public function tolak()
   {
     $lists=Cuti::latest()->where('status','tolak')->get();
      return view('Staff.list_cuti_pegawai_ditolak',compact('lists'));
   }

    public function terima()
   {
     $lists=Cuti::latest()->where('status','diterima')->get();
      return view('Staff.list_cuti_pegawai_diterima',compact('lists'));
   }

   public function edit($id)
   {
    $data=Cuti::find($id);
      return view('Staff.edit_cuti_pegawai',compact('data'));
   
   }

   public function up($id)
   {
     Request()->validate([
     'catatan'=>'required',

     ]);

     Cuti::find($id)->update([
      'catatan'=>Request()->catatan,
      'status'=>Request()->status,

     ]);

     return redirect('/staff/list-cuti-pegawai')->with('pesan','Pengjajuan Berhasil Ditanggapi');
   }
}
