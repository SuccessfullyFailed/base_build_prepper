<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Display extends Model
{
	protected $fillable = ["buildable_id", "type", "data"];

	

	public function buildable()
	{
		return $this->belongsTo(Buildable::class);
	}
}