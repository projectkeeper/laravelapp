<form>
  @csrf
  <P>Confirm ⇒ execute</P>

  <p>お知らせ情報の登録を完了しました。</p>
  <div>
     <p>タイトル: {{$ntf_title}}</p>
  </div>
     <br>
  <a href="javascript:button_press('btn_regist', 'ntf_register_init', '','/ntf_init')" class=''><span>入力画面</span></a>
</form>
