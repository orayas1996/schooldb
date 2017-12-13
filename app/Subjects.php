<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    public $incrementing = false;

    public function score()
    {
        return $this->belongsTOMany('App\Students','score');
    }
    public function classes()
    {
        return $this->belongsTOMany('App\Classrooms','education');
    }
    public function teacher()
    {
        return $this->belongsTO('App\Officials');
    }
	
}
