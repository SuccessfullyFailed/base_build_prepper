<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 */
	public function up(): void
	{
		Schema::create('buildables', function (Blueprint $table) {
			$table->id();
			$table->foreignId('game_id')->constrained()->cascadeOnDelete();
			$table->enum('type', ['floor', 'wall', 'ceiling', 'roof']);
			$table->float('width');
			$table->float('height');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('buildables');
	}
};
