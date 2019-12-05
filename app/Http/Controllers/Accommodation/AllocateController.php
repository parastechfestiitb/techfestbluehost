<?php

namespace App\Http\Controllers\Accommodation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AllocateController extends Controller
{
    public function hostelGet(Request $r){
        return DB::table('rooms')->where('hostel',$r->hostel)->get();
    }
}
