<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Building extends Model
{
	protected $fillable = ["user_id", "game_id", "build_width", "build_height"];

	

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function game()
	{
		return $this->belongsTo(Game::class);
	}

	public function nodes()
	{
		return $this->hasMany(BuildingNode::class);
	}
}