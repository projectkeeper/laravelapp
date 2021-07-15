@extends('layouts/cmn_template')

@section ('header')
 @include('top.header')
@endsection

@section ('init_screen')
 @if($proc_id == config('const.CONST_PROC_ID_USER_REG_INIT'))
  @include('components.userInfo.regist_init_userInfo',['login_name'=> $login_name])

@elseif($proc_id == config('const.CONST_PROC_ID_USER_REG_CHECK'))
  @include('components.userInfo.regist_check_userInfo',['name_kanji'=>$name_kanji,'name_kana'=>$name_kana,'login_id'=>$login_id,'login_pass'=>$login_pass,'tel_num'=>$tel_num,'mail_addr'=>$mail_addr])

@elseif($proc_id == config('const.CONST_PROC_ID_USER_REG_EXE'))
  @include('components.userInfo.regist_complete_userInfo',['name_kanji'=>$name_kanji,'name_kana'=>$name_kana,'login_id'=>$login_id])
 @endif
@endsection

@section ('get_confirm')
<p>'get_confirm'です</p>
@endsection

@section ('get_result')
<p>'get_result'です</p>
@endsection

@section ('footer')
 @include('top.footer')
@endsection
