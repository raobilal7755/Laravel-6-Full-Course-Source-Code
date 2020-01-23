<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function index(){
        $name='Rao Bilal';
        $bioData=['Bilal','bilal@gmail.com','Lahore','IT'];
        return view('condition.index',compact('name','bioData'));
    }
}
