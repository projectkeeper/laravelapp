<?php
return [
  /**
処理ID
**/
//お知らせ情報の処理ID
'CONST_PROC_ID_NTF_REGISTER_INIT' => 'ntf_register_init',
'CONST_PROC_ID_NTF_REGISTER_CHECK' => 'ntf_register_check',
'CONST_PROC_ID_NTF_REGISTER_EXE' => 'ntf_register_exe',
'CONST_PROC_ID_NTF_SEARCH_INIT' => 'ntf_search_init',
'CONST_PROC_ID_NTF_SEARCH_EXE' => 'ntf_search_exe',
'CONST_PROC_ID_NTF_SHOW_DETAIL' => 'ntf_show_detail',
'CONST_PROC_ID_NTF_UPDATE_CHECK' => 'ntf_update_check',
'CONST_PROC_ID_NTF_UPDATE_EXE' => 'ntf_update_exe',
'CONST_PROC_ID_NTF_DELETE_EXE' => 'ntf_delete',

'ERROR_MESSAGE' => 'エラーが発生しました。',


//ユーザ情報の処理ID
'CONST_PROC_ID_USER_REG_INIT' => 'user_reg_init',
'CONST_PROC_ID_USER_REG_CHECK' => 'user_reg_check',
'CONST_PROC_ID_USER_REG_EXE' => 'user_reg_ext',
'CONST_PROC_ID_USER_SEARCH_INIT' => 'user_search_init',
'CONST_PROC_ID_USER_SEARCH_EXE' => 'user_search_exe',
'CONST_PROC_ID_USER_SHOW_DETAIL' => 'user_show_detail',
'CONST_PROC_ID_USER_UPDATE_EXE' => 'user_update_exe',
'CONST_PROC_ID_USER_DELETE_EXE' => 'user_delete_exe',


/**
変数（DBカラム名）
*/

//共通
'CONST_NTF_INS_DATE' => 'ins_date',
'CONST_NTF_INS_NAME' => 'ins_name',
'CONST_NTF_UPD_DATE' => 'upd_date',
'CONST_NTF_UPD_NAME' => 'upd_name',
'CONST_NTF_DEL_FLAG' => 'del_flag',

//ログインユーザ
'CONST_USER_USER_ID' => 'user_id',
'CONST_USER_NAME_KANJI' => 'name',
'CONST_USER_NAME_KANA' => 'name_kana',
'CONST_USER_TEL_NUM' => 'tel_num',
'CONST_USER_MAIL_ADDR' => 'email',
'CONST_USER_ERR_COUNT' => 'err_count',
'CONST_USER_LOCK_FLG' => 'lock_flg',

//ログイン情報
'CONST_LOGIN_ID' => 'login_id',
'CONST_LOGIN_PASS' => 'password',
'CONST_LOGIN_PASS_CONF' => 'login_pass_conf',

//お知らせ機能関連
'CONST_NTF_ID' => 'ntf_id',
'CONST_NTF_TITLE' => 'ntf_title',
'CONST_NTF_CONTENT' => 'ntf_content',
'CONST_NTF_PERIOD_FROM' => 'ntf_period_from',
'CONST_NTF_PERIOD_TO' => 'ntf_period_to',
'CONST_NTF_SORT' => 'ntf_sort',
'CONST_NTF_ON_FLAG' => 'ntf_on_flag',




'Test' => [
        'dog' => '犬',
        'cat' => 'ネコ',
    ]

];
