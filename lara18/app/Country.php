<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public $timestamps=false;

    public function post(){
        return $this->hasManyThrough(Post::class,User::class);
    }
}
