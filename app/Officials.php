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
    public function subjects()
    {
        return $this->hasMany('App\Subjects');
    }
    public function club()
    {
        return $this->belongsTO('App\Clubs');
    }
}
