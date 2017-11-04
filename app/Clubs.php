<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clubs extends Model
{
    public $incrementing = false;

    public function students()
    {
        return $this->hasMany('App\Students','enterclub');
    }
}
