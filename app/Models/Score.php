<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Score extends Model
{
    protected $table = 'score';
	
	protected $primaryKey = 'score_id';
	public $incrementing = true;
}