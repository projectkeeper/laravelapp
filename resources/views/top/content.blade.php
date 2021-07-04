@extends('layouts/ntf_template2')

@section ('header')
 @include('top.header')
@endsection

@section ('main')
  <?php
  //  require_once './top_digest.php';
  ?>
<div class="box26">
 <span class="box-title">よく使う機能</span>
 <div class="layout01">
  <table border=0>
  <tr>
    <td><img border="0" src="/image/regEngineer.png" width="200" height="100" title="エンジニア情報の登録"/></td>
    <td><img border="0" src="/image/srchEngineer.png" width="200" height="100" title="エンジニア情報の検索"/></td>
    <td><img border="0" src="/image/regUser.png" width="200" height="100" title="ユーザ情報の登録"/></td>
    <td><img border="0" src="/image/srchUser.png" width="200" height="100" title="ユーザ情報の検索"/></td>
  </tr>
</table>
</div>
</div>
  <br>
  <form>
  <div class="box26">
    <span class="box-title">登録データ状況</span>
    <table border="0">
      <tr>
        <td class="td_layout1">
          公開済みエンジニア数
        </td>
        <td class="td_layout2">
          XXXX件
        </td>
        <td class="td_layout1">
          公開前エンジニア数
        </td>
        <td class="td_layout2">
          XXXX件
        </td>
        <td class="td_layout1">
          登録中エンジニア数
        </td>
        <td class="td_layout2">
          XXXX件
        </td>
      </tr>
    </table>
   </div>
  </form>
   <div class="info-title">
     インフォメーション
   </div>
@endsection

@section ('footer')
 @include('top.footer')
@endsection
