<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Ntf_User;

class LoginController extends Controller
{
  /**
    POST送信
  **/
  public function exe_login(Request $request){

  //入力チェック
  $validate_rule =[
      'login_id' => 'required',
      'login_pass' => 'required',
  ];

  $this->validate($request, $validate_rule);

  //NTFのORMを宣言
  $query = Ntf_User::query();

  if(isset($request->login_id)){
       //$query->where('ntf_title',$request->ntf_title);
       $query->equalUserID($request->login_id);
    }

  if(isset($request->login_pass)){
      //$query->where('ntf_content',$request->ntf_content);
      $query->equalPassword($request->login_pass);
    }

  $results= $query->get();

  //取得データが1件の場合、ログイン実施
  if($results->count()==1){

    $request->session()->put('name_kanji',$results[0]->name_kanji);

    //Viewに連携するデータ
    $data= [
          'proc_id' => $request->proc_id,
          'result' => $results,
          'login_name' => $request->session()->get('name_kanji')
    ];

    return view('top.content', $data);

  }else{
        $data = [
          'error_msg' => 'ユーザID又はパスワードが間違っています'
        ];
        //return redirect('/open_login');
      //  return redirect('/open_login',"301", $data);
        return view('login.login', $data);
      //  return redirect()->rout('/open_login', $data);
        //return redirect(route('/open_login',['err_msg'=>$error_msg]));
  }
 }
}
