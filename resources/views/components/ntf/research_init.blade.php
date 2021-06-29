
<form>
<center>
 <div class="box26">
  @csrf
  <span class="box-title">通知情報検索</span>
  <table border="1" width="1000">
     <tr>
      <td width=15% class="td_layout">通知情報検索</td>
      <td width=35%>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="text" name="ntf_title" style="width:300px" value= "{{old('ntf_title')}}">
         </label>
        </div>
      </td>
      <td width=15% class="td_layout">お知らせ内容</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="text" name="ntf_content" style="width:300px" value= "{{old('ntf_content')}}">
         </label>
        </div>
      </td>
    </tr>
    <tr>
      <td width=15% class="td_layout">表示日時(FROM）</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="date" name="ntf_period_from" style="width:300px" value= "{{old('ntf_period_from')}}">
         </label>
        </div>
      </td>
      <td width=15% class="td_layout">表示日時（TO）</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="date" name="ntf_period_to" style="width:300px" value= "{{old('ntf_period_to')}}">
         </label>
        </div>
      </td>
    </tr>
  </table>
</div>
</center>
  <!--<input type="submit">-->
<center>
  <div class='btn-animation-02'>
   <a href="javascript:button_press('btn_search', '{{config('const.CONST_PROC_ID_NTF_SEARCH_EXE')}}', '','/laravelapp/public/ntf_init')" ><span>検索</span></a>
  </div>
  <div class='btn-animation-02'>
     <a href="javascript:reset()"><span>リセット</span></a>
  </div>
</center>
</form>
<br>
