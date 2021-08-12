<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ntf;

class NtfController extends Controller
{

/**
  GET送信
**/
public function index(Request $request){

  //DBへ接続テスト
  //$items = Ntf::all();
  //$ntf_data = DB::select('select * from t_notification');
  //$data = ['msg' => '本一覧', 'books' => $books];

   $data= [

     'ntf_period_from' => $request->ntf_period_from,
     'ntf_period_to' => $request->ntf_period_to,
     'proc_id' => $request->proc_id,
     'btn_id' => $request->btn_regist,
     'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))

   ];

   //Helloフォルダのindex.phpを返す
    return view('control.ntf_control', $data);
 }

/**
  POST送信
**/
public function post(Request $request){


 //「お知らせ情報登録」処理関連
if($request->proc_id == config('const.CONST_PROC_ID_NTF_REGISTER_INIT')) {

  //画面入力値の初期化
  $data= [
    'ntf_title' => '',
    'ntf_content' => '',
    'ntf_period_from' => '',
    'ntf_period_to' => '',
    'proc_id' => $request->proc_id,
    'btn_id' => '',
    'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
  ];

}elseif ($request->proc_id == config('const.CONST_PROC_ID_NTF_REGISTER_CHECK')) {

        //入力チェック
        $validate_rule =[
          'ntf_title' => 'required',
          'ntf_content' => 'required',
          'ntf_period_from' => 'required',
          'ntf_period_to' => 'required'
        ];

        $this->validate($request, $validate_rule);

        $imagefile01 = $request->file('img_path1');
        $imagefile02 = $request->file('img_path2');

        $temp_img_path01 = $imagefile01->store('public/avatar');
        $temp_img_path02 = $imagefile02->store('public/avatar');

        //Viewに連携するデータ
        $data= [
          'ntf_title' => $request->ntf_title,
          'ntf_content' => $request->ntf_content,
          'ntf_period_from' => $request->ntf_period_from,
          'ntf_period_to' => $request->ntf_period_to,
          'proc_id' => $request->proc_id,
          'btn_id' => $request->btn_regist,
          'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI')),
          'img_path01' => str_replace('public/', 'storage/', $temp_img_path01),
          'img_path02' => str_replace('public/', 'storage/', $temp_img_path02)
        ];

 }elseif ($request->proc_id == config('const.CONST_PROC_ID_NTF_REGISTER_EXE')) {

//モデルの初期化
$ntf = new Ntf();

//インサートデータの作成
$param = ['ntf_title'=> $request->ntf_title,
            'ntf_content'=> $request->ntf_content,
            'ntf_period_from'=> $request->ntf_period_from,
            'ntf_period_to'=> $request->ntf_period_to,
            'sort'=>'1',
            'on_flag'=>'1',
            'ins_date'=> Now(),
            'ins_name'=> 'ssasaki',
            'upd_date'=> Now(),
            'upd_name'=> 'ssasaki',
            'del_flag'=> '0',
            'img_path02' => $request->img_path02,
            'img_path01' => $request->img_path01
          ];

  //インサート処理の実行
 $ntf->fill($param)->save();
  //DB::table('t_notification')->insert($param);

   //Viewに連携するデータ
   $data= [
     'ntf_title' => $request->ntf_title,
     'proc_id' => $request->proc_id,
     'btn_id' => $request->btn_regist,
     'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
   ];

}elseif($request->proc_id == config('const.CONST_PROC_ID_NTF_SEARCH_INIT')){
  //画面入力値の初期化
  $data= [
    'ntf_title' => '',
    'ntf_content' => '',
    'ntf_period_from' => '',
    'ntf_period_to' => '',
    'proc_id' => $request->proc_id,
    'btn_id' => '',
    'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
  ];

 }elseif($request->proc_id == config('const.CONST_PROC_ID_NTF_SEARCH_EXE')){

   //NTFのORMを宣言
   $query = Ntf::query();

   if(isset($request->ntf_title)){
      //$query->where('ntf_title',$request->ntf_title);
      $query->equalTitle($request->ntf_title);
   }

   if(isset($request->ntf_content)){
     //$query->where('ntf_content',$request->ntf_content);
     $query->equalContent($request->ntf_content);
   }

   if(isset($request->ntf_period_from)){
     $query->equalPeriodFrom($request->ntf_period_from);
     //$query->where('ntf_period_from',$request->ntf_period_from);
   }

   if(isset($request->ntf_period_to)){
     $query->equalPeriodTo($request->ntf_period_to);
     //$query->where('ntf_period_to',$request->ntf_period_to);
   }

   $results=$query->get();

/**
   //where句の作成
   $sql_where = '';
   $sql_where_data = array();

   if(isset($request->ntf_title)){
      $sql_where .= "ntf_title = ?";
      $sql_where_data[] = $request->ntf_title;
   }

   if(isset($request->ntf_content)){
      $sql_where .= 'ntf_content = ?';
      $sql_where_data[] = $request->ntf_content;
   }

   if(isset($request->ntf_period_from)){
      $sql_where .= 'ntf_period_from = ?';
      $sql_where_data[] = $request->ntf_period_from;
   }

   if(isset($request->ntf_period_to)){
      $sql_where .= 'ntf_period_to = ?';
      $sql_where_data[] = $request->ntf_period_to;
   }

   //SQLの実行
   $results = DB::table('t_notification') ->whereRaw($sql_where,$sql_where_data) -> get();
*/

   //Viewに連携するデータ
   $data= [
        'proc_id' => $request->proc_id,
        'results' => $results,
        'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
      ];

    return view('control.ntf_control', $data);
    }

  elseif($request->proc_id == config('const.CONST_PROC_ID_NTF_SHOW_DETAIL')){

    //入力チェックの条件定義
/*  $validate_rule =[
      'record_id' => 'required'
    ];

    //入力チェックの実施
    $this->validate($request, $validate_rule);
*/

   //DBへ接続テスト
    $result = Ntf::find($request->record_id);

/**
    //where句の作成
    $sql_where = '';
    $sql_where_data = array();

    $sql_where = 'ntf_id = ?';
    $sql_where_data[] = $request->record_id;

    //SQLの実行
    $result = DB::table('t_notification') ->whereRaw($sql_where,$sql_where_data) -> get();
*/
    //Viewに連携するデータ
    $data= [
         'proc_id' => $request->proc_id,
         'result' => $result,
         'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
       ];

  }
  //更新処理
  elseif($request->proc_id == config('const.CONST_PROC_ID_NTF_UPDATE_EXE')){

    //入力チェックの条件定義
    $validate_rule =[
      'ntf_title' => 'required',
      'ntf_content' => 'required',
      'ntf_period_from' => 'required',
      'ntf_period_to' => 'required',
      'record_id' => 'required',
    ];

    //入力チェックの実施
    $this->validate($request, $validate_rule);

    //NTFのORMを宣言
    $ntf = Ntf::find($request->record_id);
    $form = $request->all();
    unset($form['_token']);
    $ntf->fill($form)->save();

/**
   //更新データ定義
   $param = [
     'ntf_title' => $request->ntf_title,
     'ntf_content' => $request->ntf_content,
     'ntf_period_from' => $request->ntf_period_from,
     'ntf_period_to' => $request->ntf_period_to,
     'upd_date'=> Now(),
     'upd_name'=> 'ssasaki',
   ];

    //SQLの実行
    DB::table('t_notification') -> where('ntf_id',$request->record_id) -> update($param);
**/
  //Viewに連携するデータ
  $data= [
    'ntf_title'=>$request->ntf_title,
    'proc_id'=>$request->proc_id,
  'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))];

  }elseif($request->proc_id == config('const.CONST_PROC_ID_NTF_DELETE_EXE')){

    //削除を実行
    $ntf = Ntf::find($request->record_id)->delete();

/**
    //SQLの実行
    DB::table('t_notification') -> where('ntf_id',$request->record_id) -> delete();
*/
    //Viewに連携するデータ
    $data= [
     'ntf_title' => $request->ntf_title,
     'proc_id' => $request->proc_id,
     'login_name' => $request->session()->get(config('const.CONST_USER_NAME_KANJI'))
       ];

  }

  return view('control.ntf_control', $data);
 }
}
