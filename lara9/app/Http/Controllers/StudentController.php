<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function insert1(){
        $std=new Student;
        $std->name='ali';
        $std->email='ali@gmail.com';
        $std->address='multan';
        $std->phone_no=123456789;

        $std->save();
    }

    public function insert2(){
        $std=new Student([
            "name"=>"hello",
            "email"=>"hello@gmail.com",
            "address"=>"hello",
            "phone_no"=>1234544455,
        ]);
        $std->save();
    }

    public function insert3(){
        $std=Student::create([
            "name"=>"asif",
            "email"=>"asif@gmail.com",
            "address"=>"multan",
            "phone_no"=>1234544455,
        ]);
    }
    public function read(){
        $std=new Student;
        $select_data=$std->all();
        return view('file.index',compact('select_data'));
    }
    public function update(){
        $std=new Student;
        $up_data=$std->find(1);
        $up_data->name='update';
        $up_data->email='update@gmail.com';
        $up_data->address='update';
        $up_data->phone_no=786877968;
        $up_data->save();
    }
    public function del(){
        $std=new Student;
        $del=$std->find(1);
        $del->delete();
    }
}
