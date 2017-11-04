<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officials extends Model
{
    public $incrementing = false;

    public function class()
    {
        return $this->hasOne('App\Classrooms');
    }

}
