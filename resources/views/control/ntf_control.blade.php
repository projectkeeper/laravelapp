@extends('layouts/cmn_template')

@section ('header')
 @include('top.header')
@endsection

@section ('init_screen')

 @if($proc_id == config('const.CONST_PROC_ID_NTF_REGISTER_INIT'))
  @include('components.ntf.regist_init',['proc_id'=>$proc_id, 'btn_id'=>$btn_id, 'errors' => $errors ])

 @elseif($proc_id == config('const.CONST_PROC_ID_NTF_REGISTER_CHECK'))
  @include('components.ntf.regist_confirm',['ntf_content'=>$ntf_content, 'ntf_period_from'=>$ntf_period_from, 'ntf_period_to'=> $ntf_period_to ])

 @elseif($proc_id == config('const.CONST_PROC_ID_NTF_REGISTER_EXE'))
  @include('components.ntf.regist_complete')

  @elseif($proc_id == config('const.CONST_PROC_ID_NTF_SEARCH_INIT'))
    @include('components.ntf.research_init')

 @elseif($proc_id == config('const.CONST_PROC_ID_NTF_SEARCH_EXE'))
  @include('components.ntf.research_complete',['results'=> $results])

 @elseif($proc_id == config('const.CONST_PROC_ID_NTF_SHOW_DETAIL'))
  @include('components.ntf.detail_init',['result'=>$result,'proc_id'=>$proc_id])

 @elseif($proc_id == config('const.CONST_PROC_ID_NTF_UPDATE_EXE'))
    @include('components.ntf.update_complete')

 @elseif($proc_id == config('const.CONST_PROC_ID_NTF_DELETE_EXE'))
    @include('components.ntf.delete_complete')

 @endif
@endsection

@section('title', "画面")

@section ('exe_biz_logic')
<p>'exe_biz_logic'です{{$proc_id}}</p>

{{--
<table>
  <tr><th>id</th><th>title</th><th>content</th></tr>
 @foreach($items as $item)
  <tr>
    <td>{{$item->ntf_id}}</td>
    <td>{{$item->ntf_title}}</td>
    <td>{{$item->ntf_content}}</td>
  </tr>
  @endforeach
</table>
--}}
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
