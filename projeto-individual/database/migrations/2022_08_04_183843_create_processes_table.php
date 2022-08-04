<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->id();
            $table->string('process_number', 25)->unique();
            $table->string('lawyer', 255);
            $table->string('claimant', 255);
            $table->string('defendant', 255)->nullable();
            $table->string('court', 255)->nullable();
            $table->string('city', 255);
            $table->string('judge', 255)->nullable();
            $table->string('subject', 255)->nullable()->default('Civil');
            $table->decimal('process_value', 20, 2);
            $table->date('processed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes');
    }
};
