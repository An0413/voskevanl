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
        Schema::create('workers', function (Blueprint $table) {
            $table->id();
            $table->integer('seq');
            $table->string('name');
            $table->string('lastname');
            $table->integer('worker_id');
            $table->string('position');
            $table->string('img');

            $table->timestamps();

//            $table->index('position', 'worker_position_idx');
//            $table->foreign('position', 'worker_position_fk')->on('worker_positions')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
