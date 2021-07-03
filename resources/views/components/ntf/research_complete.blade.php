<form>
  <center>
   <div class="box26">
  @csrf
    <span class="box-title">通知情報検索結果一覧</span>
      <table border=1>
      <tr>
      <td width=15% class="td_layout">タイトル</td>
      <td width=15% class="td_layout">お知らせ情報</td>
      <td width=15% class="td_layout">表示期間（From）</td>
      <td width=15% class="td_layout">表示期間（To）</td>
      <td width=15% class="td_layout">画像１</td>
      <td width=15% class="td_layout">画像２</td>
      <td width=5% class="td_layout">詳細</th>
      </tr>

      @foreach($results as $result)
        <tr>
         <td width=15% class="">{{$result->ntf_title}}</td>
         <td width=15% class="">{{$result->ntf_content}}</dt>
         <td width=15% class="">{{$result->ntf_period_from}}</td>
         <td width=15% class="">{{$result->ntf_period_to}}</td>
         <td width=15% class="">
           @if(isset($result->img_path01))
              <img src="{{asset($result->img_path01)}}" width="100" height="100" />
           @endif
         </td>
         <td width=15% class="">
           @if(isset($result->img_path02))
              <img src="{{asset($result->img_path02)}}" width="100" height="100" />
           @endif
         </td>
         <td width=5% class="">
           <a href="javascript:button_press('btn_detail', '{{config('const.CONST_PROC_ID_NTF_SHOW_DETAIL')}}','{{$result->ntf_id}}','/ntf_init')" class=''><span>詳細</span>
           </a>
         </td>
        </tr>
      @endforeach
     </table>
   </div>
  </center>
     <br>
  <center>
    <div class='btn-animation-02'>
       <a href="javascript:button_press('btn_regist', 'ntf_search_init', '','/laravelapp/public/ntf_init')" class=''><span>戻る</span></a>
    </div>
  <center>
</form>
