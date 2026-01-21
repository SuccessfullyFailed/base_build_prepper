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
		Schema::create('displays', function (Blueprint $table) {
			$table->id();
			$table->foreignId('buildable_id')->constrained()->cascadeOnDelete();
			$table->enum('type', ['color', 'image']);
			$table->string('data'); // rgb(...) or image path
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void
	{
		Schema::dropIfExists('displays');
	}
};
