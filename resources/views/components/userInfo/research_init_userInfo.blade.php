<form>
  <div class="box26">
   <span class="box-title">アカウントユーザ情報</span>
    <table border="0" width="1200">
      <tr>
        <td width=15% class="td_layout"> 名前</td>
        <td width=35%>
          <div class="cp_iptxt">
           <label class="ef">
             <input type="text" name='{{config('const.CONST_USER_NAME_KANJI')}}' style="width:300px"  value= "" >
           </label>
          </div>
        </td>
        <td width=15% class="td_layout">メルアド</td>
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
<table border="1" width="1300">
 <tr>
  <td>
   <center>
    <div class="container">
      <a href="javascript:button_press('btn_user_search_exe','{{config('const.CONST_PROC_ID_USER_SEARCH_EXE')}}','','user_info')" class="btn-animation-02"><span> 検 索 <span></a>&emsp;
      <a href="javascript:reset()" class="btn-animation-02"><span>リセット<span></a>
    </div>
   </center>
  </td>
 </tr>
</table>

</form>
