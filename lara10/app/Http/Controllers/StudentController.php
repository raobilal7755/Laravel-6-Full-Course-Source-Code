<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
class StudentController extends Controller
{
    public function insert(){
        $std=new Student;
        $std->fname='Mr';
        $std->lname='Bilal';
        $std->email='bilal@gmail.com';
        $std->password='bilal';
        $std->address='Gulshan Ravi';
        $std->image='picture';
        $std->city='Lahore';
        $std->company='IT House';
        $std->phone_no='0243454353';
        $std->postal_code='343434';
        $std->save();
    }

    public function select(){
        $std=new Student;
        $data=$std->paginate(10);
        return view('file.index',compact('data'));
    }
}
