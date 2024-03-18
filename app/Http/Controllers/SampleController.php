<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index(Request $request) {
        $sampleValue = "sample テキストです。";

        //$insertResult = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'ccc@ccc','ccc','333333')");
        //dd($insertResult);

        $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'ccc'");
        dd($deleteResult);

        return view("sample/sample", ["sampleValue" => $sampleValue]);
    }
}
