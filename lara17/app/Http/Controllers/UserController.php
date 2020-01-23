<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class UserController extends Controller
{
    public function index(){
        $data=Role::find(2)->users->toArray();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
