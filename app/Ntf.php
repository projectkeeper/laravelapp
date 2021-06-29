<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ntf extends Model
{
    //当該モデルと紐付けるDBテーブル名と主キー項目を設定する
    protected $table = 't_notification';
    protected $primaryKey = 'ntf_id';

    //更新対象のカラム名を指定する
    protected $fillable = ['ntf_title','ntf_content','ntf_period_from','ntf_period_to','img_path01','img_path02','sort','on_flag','ins_name','upd_name','del_flag'];

   //created_atに紐付くカラム名を指定する
   const CREATED_AT='ins_date';

   //updated_atに紐付くカラム名を指定する
   const UPDATED_AT='upd_date';

   //timestamps形式の自動更新を無効
   //public $timestamps = false;

   //デフォルトフォーマットを変更
   //protected $dateFormat = 'YYYY/MM/DD';

public function scopeEqualTitle($query, $str){
  return $query->where('ntf_title','like','%'.$str.'%');
}

public function scopeEqualContent($query, $str){
  return $query->where('ntf_content','like','%'.$str.'%');
}

public function scopeEqualPeriodFrom($query, $str){
  return $query->whereDate('ntf_period_from','>=',$str);
}

public function scopeEqualPeriodTo($query, $str){
  return $query->where('ntf_period_to','<=',$str);
}

}
