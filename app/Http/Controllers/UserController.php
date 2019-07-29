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

    /**
    *c查询  
    */
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


    /**
    *修改 
    */
    function test(){
      $id = request()->route('id');//接收id参数
      //更新数据  
      $id = 4;
      $age = Db::table("users")->where("user_id","=",$id)->update(['user_name'=>'用户名']);
      if($age){
        return '更新成功';
      }else{
        return '删除成功';
      }
      // var_dump($age); 为真就是更新成功
      $id = 6;
      //删除数据
      $res = DB::table('users')->where('user_id','=',$id)->delete();
      if($res){
        return 'tongpankt.com提示您删除成功';
      }else{
         return 'tongpankt.com提示您删除失败';
      }
    }


    function show(){
      $id = 1;
      return view('User.profile',['User'=>User::findOrfail($id)]);
    }

    function test3(){
      $users = DB::table('users')->paginate(1);
      return view('user.test',['users'=>$users]);
    }

    //分页代码
     function page2 (){
         $users = DB::table('users')->paginate(2);
      return view('user.test',['users'=>$users]);
     }

     //框架自带分页
     function page3(){

       // $users = DB::table('users')->paginate(3);
       //只显示上一页，下一页的操作如下：
       // $users = DB::table('users')->simplePaginate(1);
      //Eloquent模型分页
     $users = App\User::paginate(15);





      return view('user.test',['users'=>$users]);


     }


};



















