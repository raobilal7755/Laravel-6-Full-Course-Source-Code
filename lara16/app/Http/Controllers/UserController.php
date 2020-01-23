<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
class UserController extends Controller
{
    public function index(){
        $data=Person::find(1)->email;
        return view('index',compact('data'));
    }
}
