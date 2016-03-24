<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use App\Model\Students;
use App\Model\ofuser;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Student extends Controller
{

	public function show(){
        // $tampil = DB::select('select * from ofuser where username =:username', ['username'=>'admin']);
        $tampil = DB::table('ofuser')->get();
		// $tampil=Students::all();
        // dd($tampil);
        return view('student.show', ['data' => $tampil]);
		// return view('student.show')->with('data',$tampil);
	}


    public function getForm(){
    	return view('student.form');
    }

    public function store(Request $data){

    	$validation = Validator::make($data->all(),array(
    		'username' => 'required',
    		'name' => 'required',
    		'email' => 'required',
    		));
    	if ($validation->fails()) {
    		return redirect('form')->withErrors($validation);
    	}else{

            $tables= DB::table('ofuser')->insert([
                'username' => $data->Input('username'),
                'name' => $data->Input('name'),
                'email' => $data->Input('email')]);

    	// $table = new Students;
    	// $table->firstname = $data->Input('first_name');
    	// $table->lastname = $data->Input('last_name');
    	// $table->address = $data->Input('address');
    	// $table->save();
            dd($tables);

    	return redirect('form')->with('message','Data berhasil di Simpan');
    		}
    }

    public function delete($username){
    	// $delete = Students::find($username);
        $delete=DB::table('ofuser')->where('username',$username)->delete();
        // dd($delete);
    	// $delete->delete();
    	return redirect('show')->with('delmessage','Data Berasil di delete!!');
    }

    public function getEditForm($username){
        $edit=DB::table('ofuser')->where('username',$username)->first();
        // dd($edit);
    	// $edit= Students::find($id); 
    	return view('student.edit')->with('edit',$edit);
    }

    public function update(Request $formdata, $username){

    	
        $tabledata=DB::table('ofuser')->where('username',$username)->update([
        'username' => $formdata->Input('username'),
        'name' => $formdata->Input('name'),
        'email' => $formdata->Input('email')
        ]);

        // $tabledata = Students::find($username);
    	// $tabledata->username = $formdata->Input('username');
    	// $tabledata->name = $formdata->Input('name');
    	// $tabledata->email = $formdata->Input('email');
        // dd($tabledata);
    	// $tabledata->save();
    	return redirect('show')->with('updatemessage','Data Sudah di Update!!');
    }
}
