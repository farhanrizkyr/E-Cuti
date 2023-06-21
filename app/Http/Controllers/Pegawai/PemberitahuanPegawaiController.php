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
    public function index()
    {
        $datas=Pemberitahuan::latest()->paginate(6);
        return view('Pegawai.pemberitahuan',compact('datas'));
    }


}
