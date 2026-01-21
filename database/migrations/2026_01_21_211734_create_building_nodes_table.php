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
		Schema::create('building_nodes', function (Blueprint $table) {
			$table->id();
			$table->foreignId('building_id')->constrained()->cascadeOnDelete();
			$table->foreignId('buildable_id')->constrained()->cascadeOnDelete();

			// Attached to endpoint.
			$table->foreignId('end_point_id')->nullable()->constrained()->nullOnDelete();

			// Absolute transform (when not attached).
			$table->float('x')->nullable();
			$table->float('y')->nullable();
			$table->float('rotation')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('building_nodes');
	}
};
