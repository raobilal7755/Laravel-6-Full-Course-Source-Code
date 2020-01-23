<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public $timestamps=false;

    public function email(){
        return $this->hasMany(Email::class);
    }
}
