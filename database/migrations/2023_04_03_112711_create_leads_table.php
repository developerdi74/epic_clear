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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('time')->nullable();
            $table->string('message')->nullable();
            $table->integer('price')->nullable();
            $table->string('process')->nullable()->default('new');
            $table->timestamps();

            $table->softDeletes();

            $table->unsignedBigInteger('area_id')->nullable();

            $table->index('area_id','lead_area_idx');

            $table->foreign('area_id', 'lead_area_fk')->on('areas')->references('id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
