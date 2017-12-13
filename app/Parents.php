<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    public $incrementing = false;

	protected $primaryKey = 'ssn';
	
    public function ownparent()
    {

        return $this->belongsTO('App\Students','ownparent');
    }
}
