<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $timestamps=false;
    //protected $fillable=['name','email','phone_no'];
    protected $guarded=[];

    protected $table ='std';
}
