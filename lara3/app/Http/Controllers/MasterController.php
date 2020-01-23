<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function main(){
        return view('webiste.main.master');
    }
    public function slider(){
        return view('webiste.files.slider');
    }
    public function gallery(){
        return view('webiste.files.gallery');
    }
    public function portfolio(){
        return view('webiste.files.portfolio');
    }
    public function home(){
        return view('webiste.files.home');
    }
}
