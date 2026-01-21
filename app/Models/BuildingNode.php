<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class BuildingNode extends Model
{
	protected $fillable = ["building_id", "buildable_id", "x", "y", "rotation", "end_point_id"];

	

	public function building()
	{
		return $this->belongsTo(Building::class);
	}

	public function buildable()
	{
		return $this->belongsTo(Buildable::class);
	}

	public function endPoint()
	{
		return $this->belongsTo(EndPoint::class);
	}
}