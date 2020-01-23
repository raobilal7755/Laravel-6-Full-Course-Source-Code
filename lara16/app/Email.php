<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    public $timestamps=false;

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
