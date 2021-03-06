<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classrooms extends Model
{
    public $incrementing = false;
	
	protected $primaryKey = 'grade';

    public function students()
    {
        return $this->hasMany('App\Students');
    }
    public function teacher()
    {
        return $this->belongsTO('App\Officials');
    }
    public function subjects()
    {
        return $this->belongsTOMany('App\Subjects','education');
    }
}
