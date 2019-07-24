<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UserController extends Controller
{


  function index(){
  	$msg['status'] = 'success';
  	$msg['errorcode'] = 200;
  	$msg['msg'] = 'ok';
  	echo json_encode($msg);
  }




  function test(){

	$student = DB::select("select * from card");
	dd($student);

  }

};
