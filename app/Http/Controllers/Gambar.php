<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use File;
use Image;
use App\Model\Students;
use App\Model\Images;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Gambar extends Controller
{
	   public function getForm(){
        return view('image.form');
    }

    public function store(Request $request){

        $gambar = $request->file('image');
        // $gambar = $data->Input('image');
        $upload = 'gambar';
        $filename = $gambar->getClientOriginalName();
        // $filename=str_random(5).'.jpg';
        $simpan = $gambar->move($upload,$filename);
        // Image::make($gambar)->save($upload,$filename);

        $table = new Images;
        $table->judul= $request->Input('judul');
        $table->subjudul= $request->Input('sub_judul');
        $table->image= $filename;
        $table->save();
        dd($table);
    }
    public function showimg(){
        $gambar=Images::all();
        return view('image.show')->with('data',$gambar);
    }
    
}
