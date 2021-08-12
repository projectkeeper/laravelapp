<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
//use App\User_Info;
use App\User;

class UserInfoController extends Controller
{
/**
    GET送信
**/
  public function index(Request $request){
    //初期の「ユーザ情報検索画面」、「ユーザ情報登録画面」開示関連
     $data= [
       'proc_id' => $request->proc_id,
       'btn_id' => $request->btn_regist,
       'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
     ];

     //Helloフォルダのindex.phpを返す
      return view('control.userInfo_control', $data);
   }

   /**
     POST送信
   **/
   public function post(Request $request){


    //「ユーザ情報登録」処理関連
   if($request->proc_id == config('const.CONST_PROC_ID_USER_REG_INIT')) {

     //画面入力値の初期化
     $data= [
       'proc_id' => $request->proc_id,
       'btn_id' => $request->btn_regist,
       'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
     ];

   }elseif ($request->proc_id == config('const.CONST_PROC_ID_USER_REG_CHECK')) {

           //入力チェック
           $validate_rule =[
             config('const.CONST_USER_NAME_KANJI') => 'required',
             config('const.CONST_USER_MAIL_ADDR') => 'required',
             config('const.CONST_LOGIN_PASS_CONF') => 'required',
             config('const.CONST_LOGIN_PASS') => 'required',
           ];

           $this->validate($request, $validate_rule);

           //Viewに連携するデータ
           $data= [
             'proc_id' => $request->proc_id,
             config('const.CONST_USER_NAME_KANJI') => $request->name,
             config('const.CONST_USER_MAIL_ADDR') => $request->email,
             config('const.CONST_LOGIN_PASS') => $request->password,
             config('const.CONST_LOGIN_PASS_CONF') => $request->login_pass_conf,
             'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
           ];

    }elseif ($request->proc_id == config('const.CONST_PROC_ID_USER_REG_EXE')) {

   //モデルの初期化
   //$user_info = new User_Info();
   $user_info = new User();

   //インサートデータの作成
   $param = [config('const.CONST_USER_NAME_KANJI') => $request->name,
             config('const.CONST_USER_MAIL_ADDR') => $request->email,
             config('const.CONST_LOGIN_PASS') => $request->password
             ];

     //インサート処理の実行
    $user_info->fill($param)->save();
     //DB::table('t_notification')->insert($param);

      //Viewに連携するデータ
      $data= [
        'proc_id' => $request->proc_id,
        config('const.CONST_USER_NAME_KANJI') => $request->name,
        config('const.CONST_USER_MAIL_ADDR') => $request->email,
        'btn_id' => $request->btn_regist,
        'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
      ];

   }elseif ($request->proc_id == config('const.CONST_PROC_ID_USER_SEARCH_INIT')) {
    //初期の「ユーザ情報検索画面」開示処理
     $data= [
       'proc_id' => $request->proc_id,
       'btn_id' => $request->btn_regist,
       'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
     ];

  }elseif ($request->proc_id == config('const.CONST_PROC_ID_USER_SEARCH_EXE')) {
    //モデルの初期化
    $query = User::query();

    if(isset($request->name)){
       //$query->where('ntf_title',$request->ntf_title);
       $query->equalName($request->name);
    }

    if(isset($request->email)){
      $query->equalMailAddr($request->email);
    }

   $results=$query->get();

   //Viewに連携するデータ
   $data= [
        'proc_id' => $request->proc_id,
        'results' => $results,
        'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
      ];

   }

   return view('control.userInfo_control', $data);
 }
}
