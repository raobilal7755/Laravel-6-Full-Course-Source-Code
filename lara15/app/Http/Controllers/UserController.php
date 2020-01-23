<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class UserController extends Controller
{
    public function index(){
        $data=Person::find(2)->passport;
        // echo '<pre>';
        // print_r($data);
        // echo '</pre>';
        return view('index',compact('data'));
    }
}
