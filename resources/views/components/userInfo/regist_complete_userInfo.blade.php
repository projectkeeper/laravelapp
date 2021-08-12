<form>
  @csrf
  <p>以下ユーザ情報の登録を完了しました。</p>
  <div>
     <p>お名前（漢字）: {{$name}}</p>
  </div>
     <br>
  <a href="javascript:button_press('btn_regist', '{{config('const.CONST_PROC_ID_USER_REG_INIT')}}', '','/user_info')" class=''><span>ユーザ情報登録画面</span></a>
</form>
