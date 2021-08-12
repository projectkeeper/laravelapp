
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
  <li>お名前（漢字）: {{$name}}</li>
  <li>メルアド: {{$email}}</li>
  <li>ログインPW: {{$password}}</li>
</ul>

<input type="hidden" name="{{config('const.CONST_USER_NAME_KANJI')}}" value="{{$name}}">
<input type="hidden" name="{{config('const.CONST_USER_MAIL_ADDR')}}" value="{{$email}}">
<input type="hidden" name="{{config('const.CONST_LOGIN_PASS')}}" value="{{$password}}">

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
