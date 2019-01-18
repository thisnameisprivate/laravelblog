<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    // 指定表
    protected $table = 'student';
    // 指定id
    protected $primaryKey = 'id';
}