<form>
  <span class="box-title">通知情報検索結果一覧</span>
<center>
<table border=1>
<tr>
<td width=40% class="td_layout">名前</td>
<td width=40% class="td_layout">メルアド</td>
<td width=20% class="td_layout">詳細</td>
</tr>

@foreach($results as $result)
   <tr>
   <td>{{$result->name}}</td>
   <td>{{$result->email}}</dt>
   <td><a href="javascript:button_press('btn_detail', '{{config('const.CONST_PROC_ID_USER_SHOW_DETAIL')}}','{{$result->id}}','/user_info')" class=''>詳細</a></td>
   </tr>
 @endforeach
</table>

</center>
  <br>
<center>
 <div class='btn-animation-02'>
    <a href="javascript:button_press('btn_regist', '{{config('const.CONST_PROC_ID_USER_SEARCH_INIT')}}', '','/user_info')" class=''><span>戻る</span></a>
 </div>
</center>
</form>
