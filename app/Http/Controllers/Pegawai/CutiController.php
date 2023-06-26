<?php

namespace App\Http\Controllers\Pegawai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuti;
use Auth;
use Carbon\Carbon;
class CutiController extends Controller
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
        $datas=Cuti::latest()->where('user_id',auth()->user()->id)->where('status',['belum_diterima'])->get();
        return view('Pegawai.pengajuan_cuti',compact('datas'));
    }
      public function tolak()
    {
        $datas=Cuti::latest()->where('user_id',auth()->user()->id)->where('status','tolak')->get();
        return view('Pegawai.pengajuan_cuti_ditolak',compact('datas'));
    }

    public function status()
    {
    $datas=Cuti::latest()->where('user_id',auth()->user()->id)->where('status','diterima')->get();
        return view('Pegawai.pengajuan_cuti_diterima',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('Pegawai.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        request()->validate([
        'title'=>'required',
        'cuti_awal'=>'required',
        'cuti_akhir'=>'required',
        'alasan'=>'required',

        ]);

        Cuti::create([
        'title'=>Request()->title,
        'cuti_awal'=>Request()->cuti_awal,
        'cuti_akhir'=>Request()->cuti_akhir,
        'user_id'=>Auth::user()->id,
        'alasan'=>Request()->alasan,

        ]);

        return redirect('/pegawai-pengajuan-cuti')->with('pesan','Pengajuan Cuti Berhail Di Kirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Cuti::find($id);
         return view('Pegawai.edit',compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        request()->validate([
        'title'=>'required',
        'cuti_awal'=>'required',
        'cuti_akhir'=>'required',
        'alasan'=>'required',

        ]);

        Cuti::find($id)->update([
        'title'=>Request()->title,
        'cuti_awal'=>Request()->cuti_awal,
        'cuti_akhir'=>Request()->cuti_akhir,
        'user_id'=>Auth::user()->id,
        'alasan'=>Request()->alasan,

        ]);

        return redirect('/pegawai-pengajuan-cuti')->with('pesan','Pengajuan Cuti Berhail Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data=Cuti::find($id);
        $data->delete();
         return redirect('/pegawai-pengajuan-cuti')->with('pesan','Pengajuan Cuti Berhail Di Hapus');

    }
}
