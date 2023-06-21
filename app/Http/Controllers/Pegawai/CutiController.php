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
    public function index()
    {
        $datas=Cuti::latest()->where('user_id',auth()->user()->id)->get();
        return view('Pegawai.pengajuan_cuti',compact('datas'));
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

        return redirect('/pegawai-pengajuan-cuti')->with('pesan','Pengajusn Cuti Berhail Di Kirim');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
