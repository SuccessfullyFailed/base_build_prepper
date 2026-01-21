<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Buildable extends Model
{
	protected $fillable = ["game_id", "name", "type", "width", "height"];


	
	public function game()
	{
		return $this->belongsTo(Game::class);
	}

	public function endPoints()
	{
		return $this->hasMany(EndPoint::class);
	}

	public function displays()
	{
		return $this->hasMany(Display::class);
	}

	public function buildingNodes()
	{
		return $this->hasMany(BuildingNode::class);
	}
}