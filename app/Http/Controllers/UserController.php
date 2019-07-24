<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{


  function index(){
  	$msg['status'] = 'success';
  	$msg['errorcode'] = 200;
  	$msg['msg'] = 'ok';
  	echo json_encode($msg);
  }



  function test(){
  	 echo 'hello world!';
  }

};
