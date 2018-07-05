<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'topic', 'exam_id', 'opt1', 'opt2', 'opt3', 'opt4', 'ans',
    ];

    //在Topic模型裡面和Exam模型互相建立關聯
    public function these4exam()
    {
        // Topic模型跟據此線索把題目送給測驗
        return $this->belongsTo('App\Exam');
    }
}
