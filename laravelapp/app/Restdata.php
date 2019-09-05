<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Restdata extends Model
{
    protected $table = 'restdata';
    //$guardedはいわゆるブラックリスト。ホワイトリストは$filled(どちらか一方のみ指定可能)
    //$guarded…ユーザーのリクエストで更新してほしくないカラムを指定
    //$filled…ここに指定したカラム群以外は更新されない（無視される）
    protected $guarded = array('id');

    public static $rules = array(
        'message' => 'required',
        'url' => 'required'
    );

    public function getData()
    {
        return $this->id . ':' . $this->message
            . '(' . $this->url . ')';
    }
}
