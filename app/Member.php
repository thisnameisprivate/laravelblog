<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Member extends Model {
    public static function getMember () {
        return 'member name is MiraclesGG';
    }
}