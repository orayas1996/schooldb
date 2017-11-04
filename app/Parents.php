<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public $incrementing = false;

    public function ownparent()
    {

        return $this->belongsTO('App\Students','ownparent');
    }
}
