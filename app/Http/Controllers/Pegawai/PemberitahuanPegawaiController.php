<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemberitahuan;
use Auth;
use Carbon\Carbon;
class PemberitahuanPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */

       function __construct()
  {
    $this->middleware('auth');
     $this->middleware('pegawai');
  }
  
    public function index()
    {
        $datas=Pemberitahuan::latest()->paginate(6);
        return view('Pegawai.pemberitahuan',compact('datas'));
    }

    public function more($slug)
    {
      $data=Pemberitahuan::where('slug',$slug)->first();
      if ($data==false) {
        return redirect('/dashboard');
      }
       return view('Pegawai.more',compact('data'));

    }


}
