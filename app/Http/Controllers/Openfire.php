<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\ofuser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Openfire extends Controller
{
    public function coba(){
        $tampil = DB::select('select * from ofuser where username =:username', ['username'=>'admin']);
		// $tampil=ofuser::all();
        // dd($tampil);
        // return view('student.show', ['data' => $tampil]);
		return view('student.show')->with('data',$tampil);
	}
}
