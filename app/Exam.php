<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //定義要被寫入的欄位﹙預設的id、timestamp不需處理﹚
    protected $fillable = [
        'title', 'user_id', 'enable',
    ];

    // protected $casts = [
    //     'enable' => 'boolean',
    // ];

    //在Exam模型裡面和Topic模型互相建立關聯
    public function topics()
    {
        // Exam模型跟據此線索把題目一起撈進來
        return $this->hasMany('App\Topic');
    }

    //與Test模型關連
    public function tests()
    {
        return $this->hasMany('App\Test');
    }
}
