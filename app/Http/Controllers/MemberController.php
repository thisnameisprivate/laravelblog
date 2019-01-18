<?php

namespace App\Http\Controllers;

use App\Member;

class MemberController extends Controller {
    public function baseInfo ($id = null) {
        return view("member/baseInfo", [
            'name' => 'Miracelsgg',
            'age'  => 18,
            'member' => Member::getMember()
        ]);
    }
}