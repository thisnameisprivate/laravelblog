<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Student;
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
    // 
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
    // ORM
    public function orm () {
//        $student = Student::all();
//        $student = Student::get();
//        $student = Student::find(9);
//        Student::chunk(2, function ($student) {
//            dd($student);
//        });
        $student = Student::orderBy("id", "desc")->first();
        dd($student);
    }
    public function timeDate () {
//        $student = new Student();
//        $student->name = 'Mir';
//        $student->age  = 99;
//        $result = $student->save();
//        print_r($result);
//        $result = Student::orderBy('id', 'desc')->pluck('created_at')->first();
//        echo Date('Y-m-d H:i:s', $result);
        // create data
        $student = Student::create([
            'name' => 'miraclesg', 'age' => 23
        ]);
        dd($student);
    }
    // Request
    public function request (Request $request) {
       if ($request->has('name')) {
           echo $request->input('name');
       } else {
           echo "Not find this name param";
       }
       $response = $request->all();
       dd($response);
       var_dump($request->method());
       var_dump($request->is('Student/*'));
       var_dump($request->ajax());
       var_dump($request->isMethod('POST'));
    }
    // Session http Request
    public function setSession (Request $request) {
//        $request->session()->put('username', 'Miraclesgg');
    }
    // get Session
    public function getSession (Request $request) {
//        $request->session()->get('username');
    }
}