<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pemberitahuan;
use Illuminate\Support\Str;
class PemberitahuanController extends Controller
{

    function __construct()
  {
    $this->middleware('auth');
  }
  
    public function index()
    {
      $datas=Pemberitahuan::latest()->get();
     return view('Admin.pemberitahuan',compact('datas'));
    }

    public function store()
    {
      Request()->validate([
        'title'=>'required',
        'body'=>'required',
      ]);

      Pemberitahuan::create([
      'title'=>Request()->title,
      'slug'=>str::slug(Request()->title),
      'body'=>Request()->body,
      ]);

      return redirect('/pemberitahuan');

      
    }

    public function hapus($id)
    {
     $data=Pemberitahuan::find($id);
     $data->delete();
      return redirect('/pemberitahuan');
    }
    
    public function detail ($slug)
    {
      $datas=Pemberitahuan::where('slug',$slug)->first();
      return view('Admin.more',compact('datas'));
    }

    public function edit($slug)
    {
      $data=Pemberitahuan::where('slug',$slug)->first();
       return view('Admin.edit',compact('data'));

    }

    public function update($id)
    {
      Request()->validate([
        'title'=>'required',
        'body'=>'required',
      ]);

      Pemberitahuan::find($id)->update([
      'title'=>Request()->title,
      'slug'=>str::slug(Request()->title),
      'body'=>Request()->body,
      ]);

      return redirect('/admin/pemberitahuan');

    }

     public function more($slug)
    {
      $data=Pemberitahuan::where('slug',$slug)->first();
       return view('Admin.more',compact('data'));

    }

}
