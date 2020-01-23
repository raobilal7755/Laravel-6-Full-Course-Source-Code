<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function main(){
        return view('website.main.master');
    }
    public function gallery(){
        return view('website.files.gallery');
    }
    public function slider(){
        return view('website.files.slider');
    }
    public function portfolio(){
        return view('website.files.portfolio');
    }
    public function home(){
        return view('website.files.home');
    }
}
