
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
  <div class="box26">
   <span class="box-title">ユーザ情報</span>
    <table border="0" width="1200">
      <tr>
        <td width=15% class="td_layout"> 名前（漢字）</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
             <input type="text" name='{{config('const.CONST_USER_NAME_KANJI')}}' style="width:300px"  value= "" >
           </label>
          </div>
        </td>
        <td width=15% class="td_layout"> 名前（かな）</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
            <input type="text" name="{{config('const.CONST_USER_NAME_KANA')}}" style="width:300px" value= "">
           </label>
          </div>
        </td>
      </tr>
      <tr>
        <td width=15% class="td_layout"> ログインID</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
             <input type="text" name="{{config('const.CONST_LOGIN_ID')}}" style="width:300px"  value= "" >
           </label>
          </div>
        </td>
        <td width=15% class="td_layout"> パスワード</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
            <input type="text" name="{{config('const.CONST_LOGIN_PASS')}}" style="width:300px" value= "">
           </label>
          </div>
        </td>
      </tr>
      <tr>
        <td width=15% class="td_layout">TEL</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
             <input type="text" name="{{config('const.CONST_USER_TEL_NUM')}}" style="width:300px"  value= "" >
           </label>
          </div>
        </td>
        <td width=15% class="td_layout">メールアドレス</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
            <input type="text" name="{{config('const.CONST_USER_MAIL_ADDR')}}" style="width:300px" value= "">
           </label>
          </div>
        </td>
      </tr>
  </table>
  <hr>

<table border="0" width="1300">
 <tr>
  <td>
   <center>
    <div class="container">
      <a href="javascript:button_press('btn_user_regist_check','{{config('const.CONST_PROC_ID_USER_REG_CHECK')}}','','user_info')" class="btn-animation-02"><span>　確認　<span></a>&emsp;
      <a href="javascript:reset()" class="btn-animation-02"><span>リセット<span></a>
    </div>
   </center>
  </td>
 </tr>
</table>

</form>
