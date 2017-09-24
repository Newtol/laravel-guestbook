<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\msg;


class TestController extends Controller
{
    public function form()
    {
        return view('test.form');
    }

    public function addPost()
    {
        $test=new Msg();
        $test->title=$_POST['title'];
        $test->content=$_POST['content'];
        if($test->save()){
            // return redirect('test/index');
            echo '添加成功';
        }else{
            echo '添加失败';
            exit();
        }
    }
}