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
        Schema::create('employees', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 100);
            $table->date('birth_date');
            $table->integer('level');
            $table->decimal('salary', $precision = 8, $scale = 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
