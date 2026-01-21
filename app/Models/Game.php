<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Game extends Model
{
	protected $fillable = ["name", "default_build_width", "default_build_height"];



	public function buildables()
	{
		return $this->hasMany(Buildable::class);
	}

	public function buildings()
	{
		return $this->hasMany(Building::class);
	}
}