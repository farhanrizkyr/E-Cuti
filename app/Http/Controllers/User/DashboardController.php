<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuti;
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
    return view('Dashboard.dashboard',compact('pan_u','not_u','t_u'));
  }
}
