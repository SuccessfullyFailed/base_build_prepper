<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class EndPoint extends Model
{
	protected $fillable = ["buildable_id", "size", "x", "y", "rotation", "type"];

	

	public function buildable()
	{
		return $this->belongsTo(Buildable::class);
	}

	public function attachedNodes()
	{
		return $this->hasMany(BuildingNode::class);
	}
}