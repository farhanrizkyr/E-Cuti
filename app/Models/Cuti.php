<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
class Cuti extends Model
{
    protected $guarded=['id'];
    protected $dates=['cuti_awal','cuti_akhir'];
    protected $casts = [ 'cuti_awal'=>'datetime','cuti_akhir'=>'datetime'];
 
   
}
