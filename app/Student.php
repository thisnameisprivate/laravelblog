<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    // 指定表
    protected  $table = 'student';
    // 指定主键
    protected  $primaryKey = 'id';
    // 是否维护时间戳
    public $timestamps = true;
    // 指定可以批量赋值的字段
    protected $fillable = ['name', 'age'];
    // 指定不能批量赋值的字段
    protected $guarded = [];

    protected function getDateFormat () {
        return time();
    }

    protected function asDateTime ($val) {
        return $val;
    }
}