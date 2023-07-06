<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\User;
class DashboardController extends Controller
{

  function __construct()
  {
    $this->middleware('auth');
  }
  public  function index()
  {
     $pan_u=Cuti::where('user_id',auth()->user()->id)->where('status',['belum_diterima'])->count();
     $not_u=Cuti::where('user_id',auth()->user()->id)->where('status',['tolak'])->count();
     $t_u=Cuti::where('user_id',auth()->user()->id)->where('status',['tolak'])->count();
     $t_p=User::all()->count();
     $a_p=User::where('role','pegawai')->count();
     $t_a=User::where('role','admin')->count();
     $t_s=User::where('role','staff')->count();
    return view('Dashboard.dashboard',compact('pan_u','not_u','t_u','t_p','a_p','t_a','t_s'));
  }
}
