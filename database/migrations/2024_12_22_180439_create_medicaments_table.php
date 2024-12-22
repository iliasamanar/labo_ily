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
        Schema::create('medicaments', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Column for the medicament's name
            $table->string('labo_name'); // Column for the laboratory name
            $table->text('description')->nullable(); // Column for the description (nullable)
            $table->timestamps(); // Columns for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicaments');
    }
};
