<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;
use App\Models\Buildable;
use App\Models\EndPoint;

class OnceHumanSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$game = Game::create([
			"name" => "OnceHuman",
			"default_build_width" => 10,
			"default_build_height" => 10,
		]);

		OnceHumanSeeder::createBuildable(
			$game->id,
			"Floor 1x1",
			"floor",
			[1.0, 1.0],
			[
				[1,  0.0,  0.5,   0],
				[1,  0.5,  0.0,  90],
				[1,  0.0, -0.5, 180],
				[1, -0.5,  0.0, 270],

				[0.5, -0.25,  0.50,   0],
				[0.5,  0.25,  0.50,   0],
				[0.5,  0.50, -0.25,  90],
				[0.5,  0.50,  0.25,  90],
				[0.5, -0.25, -0.50, 180],
				[0.5,  0.25, -0.50, 180],
				[0.5, -0.50, -0.25, 270],
				[0.5, -0.50,  0.25, 270]
			]
		);

		OnceHumanSeeder::createBuildable(
			$game->id,
			"Floor .5x.5",
			"floor",
			[0.5, 0.5],
			[
				[0.5,  0.00,  0.25,   0],
				[0.5,  0.25,  0.00,  90],
				[0.5,  0.00, -0.25, 180],
				[0.5, -0.25,  0.00, 270]
			]
		);
	}

	function createBuildable($gameId, $name, $type, $size, $endpoints) {
		$buildable = Buildable::create([
			"game_id" => $gameId,
			"name" => $name,
			"type" => $type,
			"width" => $size[0],
			"height" => $size[1]
		]);
		foreach ($endpoints as [$size, $x, $y, $rot]) {
			EndPoint::create([
				"buildable_id" => $buildable->id,
				"size" => $size,
				"x" => $x,
				"y" => $y,
				"rotation" => $rot,
				"type" => $type
			]);
		}
	}
}
