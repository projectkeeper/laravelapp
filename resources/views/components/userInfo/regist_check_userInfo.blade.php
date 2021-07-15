
@if(count($errors) > 0)
<div>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
</div>
@endif

<form>
@csrf
<P>以下のユーザ情報を登録して宜しいでしょうか？</P>
<ul>
  <li>お名前（漢字）: {{$name_kanji}}</li>
  <li>お名前（カナ）: {{$name_kana}}</li>
  <li>メルアド: {{$mail_addr}}</li>
  <li>TEL NO: {{$tel_num}}</li>
  <li>ログインID: {{$login_id}}</li>
  <li>ログインPW: {{$login_pass}}</li>
</ul>

<input type="hidden" name="{{config('const.CONST_USER_NAME_KANJI')}}" value="{{$name_kanji}}">
<input type="hidden" name="{{config('const.CONST_USER_NAME_KANA')}}" value="{{$name_kana}}">
<input type="hidden" name="{{config('const.CONST_USER_MAIL_ADDR')}}" value="{{$mail_addr}}">
<input type="hidden" name="{{config('const.CONST_USER_TEL_NUM')}}" value="{{$tel_num}}">
<input type="hidden" name="{{config('const.CONST_LOGIN_ID')}}" value="{{$login_id}}">
<input type="hidden" name="{{config('const.CONST_LOGIN_PASS')}}" value="{{$login_pass}}">

<table border="0" width="1300">
 <tr>
  <td>
   <center>
    <div class="container">
      <a href="javascript:button_press('btn_user_regist_exe','{{config('const.CONST_PROC_ID_USER_REG_EXE')}}','','user_info')" class="btn-animation-02"><span>　登録　<span></a>&emsp;
      <a href="javascript:reset()" class="btn-animation-02"><span>リセット<span></a>
    </div>
   </center>
  </td>
 </tr>
</table>

</form>
