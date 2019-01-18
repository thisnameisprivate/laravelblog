<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class StudentController extends Controller {
    public function InsertDb () {
        // 修改
//        $result = DB::update("update student set age = ? where name = ?", [
//            20,
//            'MiraclesGG'
//        ]);
        // 查询
        $result = DB::select("select * from student where id < ?", [
            5
        ]);
        dd($result);
        // 删除
//        $result = DB::delete("delete from student where id = ?", [
//            11
//        ]);
//        var_dump($result);
    }

    public function iterable () {
        // 添加一条数据
//        $result = DB::table('student')->insert([
//            'name' => 'Miraclesgg',
//            'age'  => 22
//        ]);
//        var_dump($result);
        // 添加一条数据并获取id
        $result = DB::table('student')->insertGetId([
            'name' => 'MiraclesGG',
            'age'  => '21'
        ]);
        var_dump($result);
    }

    public function iterUpdate () {

        // 修改数据
//        $result = DB::table('student')
//            ->where('id', 15)
//            ->update([
//                'name' => '1Miraclesgg'
//            ]);
//        var_dump($result);
        // 自增
//        $result = DB::table('student')->where('id', 1)->increment('age');
//        var_dump($result);
        // 自减
        $result = DB::table('student')->where('id', 1)->decrement('age', 1, ['name' => 'Miraclesgg']);
        var_dump($result);
    }
    public function iterDel () {
        $result = DB::table('student')->where('id', '>=', '15')->delete();
        var_dump($result);
    }
    public function iterInsert () {
        // get
//        $result = DB::table('student')->get();
        // first | orderBy
//        $result = DB::table('student')->orderBy('id', 'desc')->first();
        // pluck
//        $result = DB::table('student')->pluck("name");
        // lists
//        $result = DB::table('student')->lists('name', 'id');
        // chunk
//        DB::table('student')->chunk(2, function ($student) {
//            var_dump($student);
//        });
        $result = DB::table('student')->whereRaw('id > ? and age > ?', [10, 20])->get();
        var_dump($result);
    }
    // 聚合函数
    public function aggrgation () {
//        $result = DB::table('student')->count('age');
//        $result = DB::table('student')->sum('id');
//        $result = DB::table('student')->avg('age');
//        $result = DB::table('student')->max('age');
//        $result = DB::table('student')->min('age');
        var_dump($result);

    }
}