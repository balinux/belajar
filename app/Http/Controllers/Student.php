<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Model\Students;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Student extends Controller
{

	public function show(){
		$tampil=Students::all();
		return view('student.show')->with('data',$tampil);
	}


    public function getForm(){
    	return view('student.form');
    }

    public function store(Request $data){

    	$validation = Validator::make($data->all(),array(
    		'first_name' => 'required',
    		'last_name' => 'required',
    		'address' => 'required',
    		));
    	if ($validation->fails()) {
    		return redirect('form')->withErrors($validation);
    	}else{

    	$table = new Students;
    	$table->firstname = $data->Input('first_name');
    	$table->lastname = $data->Input('last_name');
    	$table->address = $data->Input('address');
    	$table->save();
    	return redirect('form')->with('message','Data berhasil di Simpan');
    		}
    }

    public function delete($id){
    	$delete = Students::find($id);
    	$delete->delete();
    	return redirect('show')->with('delmessage','Data Berasil di delete!!');
    }

    public function getEditForm($id){
    	$edit= Students::find($id); 
    	return view('student.edit')->with('edit',$edit);
    }

    public function update(Request $formdata,$id){
    	$tabledata = Students::find($id);

    	$tabledata->firstname = $formdata->Input('first_name');
    	$tabledata->lastname = $formdata->Input('last_name');
    	$tabledata->address = $formdata->Input('address');
    	$tabledata->save();
    	return redirect('show')->with('updatemessage','Data Sudah di Update!!');
    }
}
