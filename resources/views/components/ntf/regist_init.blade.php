
@if(count($errors) > 0)
<div>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
</div>
@endif

<form enctype="multipart/form-data">
  <center>
   <div class="box26">
  @csrf
  <span class="box-title">お知らせ情報登録</span>
  <table border="1" width="1000">
     <tr>
      <td width=15% class="td_layout">タイトル(init)</td>
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
    <tr>
      <td width=15% class="td_layout">イメージ１</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="file" name="img_path1" style="width:300px" value="">
         </label>
        </div>
      </td>
      <td width=15% class="td_layout">イメージ２</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="file" name="img_path2" style="width:300px" value="">
         </label>
        </div>
      </td>
    </tr>
   </table>
  </div>
  </center>
  <center>
    <div class='btn-animation-02'>
  <a href="javascript:button_press('btn_regist', '{{config('const.CONST_PROC_ID_NTF_REGISTER_CHECK')}}', '','/ntf_init')" class=''><span>登録</span></a>
    </div>
  <center>
</form>
<br>
