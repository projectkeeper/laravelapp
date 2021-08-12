
<header>
  <div class="cp_navi">
    <img border="0" src="/image/title.png" width="320" height="64" alt="ロゴ"/>&emsp;
    <!--<b><font size="2" color="#04005f">エンジニア管理システム</b></font>-->
    <ul>
      <li><a href="content.php" target="_top">Home</a></li>
      <li><a href="../engineer/engineer_reg.php" target="_top">技術者の新規登録</a></li>
      <li><a href="../engineer/engineer_search.php" target="_top">技術者検索・更新</a></li>
      <li>
        <a href="#">マスタ管理 <span class="caret" target="_top"></span></a>
        <div>
          <ul>
            <li><a href="#cat">言語マスタ</a></li>
            <li><a href="#dog">プロセス管理</a></li>
            <li><a href="#rabbit">職務・役割</a></li>
            <li><a href="#rabbit">OS・アプリ</a></li>
            <li><a href="#rabbit">データベース</a></li>
          </ul>
        </div>
      </li>
      <li><a href="/user_info?proc_id={{config('const.CONST_PROC_ID_USER_REG_INIT')}}" target="_top">ユーザ登録</a></li>
      <li><a href="/user_info?proc_id={{config('const.CONST_PROC_ID_USER_SEARCH_INIT')}}" target="_top">ユーザ検索</a></li>
      <li><a href="/ntf_init?proc_id=ntf_register_init" target="_top">お知らせ情報登録</a></li>
      <li><a href="/ntf_init?proc_id=ntf_search_init" target="_top">お知らせ情報検索</a></li>
      <!--<li><a href="#">技術者一括登録・更新</a></li>-->
      <li><a href="rabbit">&nbsp;</a></li>
      <li><a href="rabbit"><b>ようこそ！{{$login_name}}さん</b></a></li>
      <li><a href="http://localhost/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" target="_top"><b>ログアウト</b></a></li>
      <!--<li><a href="#">技術者情報ダウンロード（リスト）</a></li>-->

      <form id="logout-form" action="http://localhost/logout" method="POST" style="display: none;">@csrf</form>
    </ul>
  </div>
</header>
