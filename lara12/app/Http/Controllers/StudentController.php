<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests\StudentRequest;
use App\Student;
class StudentController extends Controller
{
    public function form(){
        return view('form.index');
    }

    public function submitform(StudentRequest $request){
            $std=new Student;

            $std->name=$request->name;
            $std->email=$request->email;
            $std->password=$request->pass;
            $result=$std->save();

            if ($result) {
              session()->flash('sms','Sir data will be inserted Successfully');
              return redirect('/form');
            }

            
           
        
    }
}
