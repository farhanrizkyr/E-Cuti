<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function __construct()
  {
    $this->middleware('auth');
     $this->middleware('admin');

  }
  
}
