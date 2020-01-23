<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function form(){
        return view('form.index');
    }

    public function submitform(Request $request){
       echo '<pre>';
       print_r($request->all());
       echo '</pre>';
    }
}
