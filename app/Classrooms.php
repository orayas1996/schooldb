<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classrooms extends Model
{
    public $incrementing = false;

    public function students()
    {
        return $this->belongsTOMany('App\Students','class_record');
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
