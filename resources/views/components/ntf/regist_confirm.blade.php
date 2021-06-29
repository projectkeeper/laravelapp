<form>
  @csrf
  <P>以下のお知らせ入力情報を登録して宜しいでしょうか？</P>
  <ul>
    <li>タイトル: {{$ntf_title}}</li>
    <li>お知らせ内容: {{$ntf_content}}</li>
    <li>表示日（from): {{$ntf_period_from}}</li>
    <li>表示日（to): {{$ntf_period_to}}</li>
    <img src="{{asset($img_path01)}}" width="10%" height="10%" />
    <img src="{{asset($img_path02)}}" width="10%" height="10%"/>
  </ul>

  <input type="hidden" name="ntf_title" value="{{$ntf_title}}">
  <input type="hidden" name="ntf_content" value="{{$ntf_content}}">
  <input type="hidden" name="ntf_period_from" value="{{$ntf_period_from}}">
  <input type="hidden" name="ntf_period_to" value="{{$ntf_period_to}}">
  <input type="hidden" name="img_path01" value="{{$img_path01}}">
  <input type="hidden" name="img_path02" value="{{$img_path02}}">
  <a href="javascript:button_press('btn_regist', '{{config('const.CONST_PROC_ID_NTF_REGISTER_EXE')}}', '','/laravelapp/public/ntf_init')" class=''><span>確定</span></a>

</form>
