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


    function test2(){
      	$card = DB::select("select goods_id,cat_id,goods_name from goods");
        //去除满足条件的第一条
        $ca = DB::table("users")->where('address_id',">","1")->first();
        //取出满足所有条件的内容
        $cd = DB::table("users")->where('address_id','>',"1")->get();
        //返回满足条件的user_name字段的内容
        $cf = DB::table("users")->where("address_id",">","1")->pluck("user_name");
        //返回一个组合值"232059cb5361a9336ccf1b8c2ba7657a" => "vip3"
        $ch = DB::table("users")->where("address_id",">","1")->pluck("user_name",'password');
        // 指定查询自居 查询用户名和密码
        $cj = DB::table("users")->select("user_name","password")->get();
        dd($cj);
    }

    function show(){
      $id = 1;
      return view('User.profile',['User'=>User::findOrfail($id)]);
    }
};
