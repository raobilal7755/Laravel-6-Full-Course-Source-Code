<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    public function index1(){
        $std=DB::table('students')->insert([
            ["name"=>"Rao afzal","email"=>"bilal@gmail.com","address"=>"lhr"],
            ["name"=>"arslan","email"=>"ali@gmail.com","address"=>"lhr"],
            ["name"=>"wasif","email"=>"usman@gmail.com","address"=>"lhr"]
        ]);
        echo $std;
    }

    public function index2(){
        $std=DB::table('students')->get();
        return view('file.index',compact('std'));
    }
    public function index3(){
        $std=DB::table('students')->where('id',1)->update([
            'name'=>'update',
            'email'=>'update@gmail.com',
            'address'=>'update'
            ]);
        
    }
    public function index4(){
        $std=DB::table('students')->delete();
        echo $std;
            
    }
}
