<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function data(){
        $name='How to Developers';
        $student=['Bilal','Bilal@gmail.com','Fsc','Lahore'];
        return view('data')->withName($name)->withStudent($student);
    }


    public function index(){
       return view('hello.index');
    }

    public function store(){
        return view('hello.store');
    }
}
