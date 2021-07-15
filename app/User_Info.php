<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Info extends Model
{
     //当該モデルと紐付けるDBテーブル名と主キー項目を設定する
      protected $table = 'm_user';
      protected $primaryKey = 'engineer_id';

      //更新対象のカラム名を指定する
      protected $fillable = ['name_kanji','name_kana','tel_num','mail_addr','login_id','login_pass','err_count','lock_flg','del_flg','ins_user','upd_user'];

     //created_atに紐付くカラム名を指定する
     const CREATED_AT='ins_date';

     //updated_atに紐付くカラム名を指定する
     const UPDATED_AT='upd_date';

     //timestamps形式の自動更新を無効
     //public $timestamps = false;

     //デフォルトフォーマットを変更
     //protected $dateFormat = 'YYYY/MM/DD';

     public function scopeEqualUserID($query, $str){
       return $query->where('login_id','=',$str);
     }

     public function scopeEqualPassword($query, $str){
       return $query->where('login_pass','=',$str);
     }


}
