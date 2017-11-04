<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    public $incrementing = false;

    public function score()
    {
        return $this->belongsTOMany('App\Subjects','score');
    }
    public function parent()
    {
        return $this->hasMany('App\Parents','ownparent');
    }
    public function clubs()
    {
        return $this->belongsTO('App\Clubs','enterclub');
    }
    public function classroom()
    {
        return $this->belongsTO('App\Classrooms');
    }
}
