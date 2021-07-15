<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User_Info;

class UserInfoController extends Controller
{
/**
    GET送信
**/
  public function index(Request $request){

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


    //「お知らせ情報登録」処理関連
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
             config('const.CONST_USER_NAME_KANA') => 'required',
             config('const.CONST_LOGIN_ID') => 'required',
             config('const.CONST_LOGIN_PASS') => 'required',
             config('const.CONST_USER_TEL_NUM') => 'required',
             config('const.CONST_USER_MAIL_ADDR') => 'required'
           ];

           $this->validate($request, $validate_rule);


           //Viewに連携するデータ
           $data= [
             'proc_id' => $request->proc_id,
             config('const.CONST_USER_NAME_KANJI') => $request->name_kanji,
             config('const.CONST_USER_NAME_KANA') => $request->name_kana,
             config('const.CONST_LOGIN_ID') => $request->login_id,
             config('const.CONST_LOGIN_PASS') => $request->login_pass,
             config('const.CONST_USER_TEL_NUM') => $request->tel_num,
             config('const.CONST_USER_MAIL_ADDR') => $request->mail_addr,
             'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
           ];

    }elseif ($request->proc_id == config('const.CONST_PROC_ID_USER_REG_EXE')) {

   //モデルの初期化
   $user_info = new User_Info();

   //インサートデータの作成
   $param = [config('const.CONST_USER_NAME_KANJI')=> $request->name_kanji,
               config('const.CONST_USER_NAME_KANA') => $request->name_kana,
               config('const.CONST_USER_TEL_NUM')=> $request->tel_num,
               config('const.CONST_USER_MAIL_ADDR')=> $request->mail_addr,
               config('const.CONST_LOGIN_ID')=> $request->login_id,
               config('const.CONST_LOGIN_PASS')=> $request->login_pass,
               'err_count'=>'0',
               'lock_flg'=>'0',
               'del_flg'=> '0',
               'ins_date'=> Now(),
               'ins_user'=> $request->session()->get(config('const.CONST_USER_NAME_KANJI')),
               //'ins_user'=> 'Sasaki Shutaro',
               'upd_date'=> Now(),
               'upd_user'=> $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
               //'upd_user'=> 'Sasaki Shutaro'
             ];

     //インサート処理の実行
    $user_info->fill($param)->save();
     //DB::table('t_notification')->insert($param);

      //Viewに連携するデータ
      $data= [
        'proc_id' => $request->proc_id,
        config('const.CONST_USER_NAME_KANJI')=> $request->name_kanji,
        config('const.CONST_USER_NAME_KANA') => $request->name_kana,
        config('const.CONST_USER_TEL_NUM')=> $request->tel_num,
        config('const.CONST_USER_MAIL_ADDR')=> $request->mail_addr,
        config('const.CONST_LOGIN_ID')=> $request->login_id,
        'btn_id' => $request->btn_regist,
        'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
      ];
   }

   return view('control.userInfo_control', $data);
 }
}
