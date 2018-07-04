<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //定義要被寫入的欄位﹙預設的id、timestamp不需處理﹚
    protected $fillable = [
        'title', 'user_id', 'enable',
    ];
}
