
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
<center>
 <div class="box26">
  @csrf
  <span class="box-title">お知らせ情報詳細画面</span>
  <table border="1" width="1000">
     <tr>
      <td width=15% class="td_layout">タイトル</td>
      <td width=35%>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="text" name="ntf_title" style="width:300px" value= '{{$result->ntf_title}}'>
         </label>
       </div>
      </td>
      <td width=15% class="td_layout">お知らせ内容</td>
      <td>
       <div class="cp_iptxt">
        <label class="ef">
         <input type="text" name="ntf_content" style="width:300px" value= '{{$result->ntf_content}}'>
        </label>
       </div>
      </td>
     </tr>
     <tr>
      <td width=15% class="td_layout">表示日時(FROM）</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="date" name="ntf_period_from" style="width:300px" value= '{{$result->ntf_period_from}}'>
         </label>
       </div>
      </td>
      <td width=15% class="td_layout">表示日時（TO）</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <input type="date" name="ntf_period_to" style="width:300px" value= '{{$result->ntf_period_to}}'>
         </label>
        </div>
      </td>
    </tr>
   @if(isset($result->img_path01))
   <tr>
      <td width=15% class="td_layout">画像１</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <img src="{{asset($result->img_path01)}}" width="100" height="100" />
         </label>
        </div>
      </td>
    @endif
    @if(isset($result->img_path02))
      <td width=15% class="td_layout">画像２</td>
      <td>
        <div class="cp_iptxt">
         <label class="ef">
          <img src="{{asset($result->img_path02)}}" width="100" height="100" />
         </label>
        </div>
      </td>
    </tr>
    @endif
  </table>
</div>

<div class='btn-animation-02'>
  <a href="javascript:button_press('btn_update_start','{{config('const.CONST_PROC_ID_NTF_UPDATE_EXE')}}','{{$result->ntf_id}}','/laravelapp/public/ntf_init')" class=""><span>更新</span></a>
</div>
<div class='btn-animation-02'>
  <a href="javascript:button_press('btn_delete_start','{{config('const.CONST_PROC_ID_NTF_DELETE_EXE')}}','{{$result->ntf_id}}','/laravelapp/public/ntf_init')" class=""><span>削除</span></a>
</div>
</center>
</form>
<br>
