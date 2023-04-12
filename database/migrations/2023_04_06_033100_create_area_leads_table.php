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
        Schema::create('area_leads', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('area_id');

            $table->index('lead_id', 'lead_area_idxx');
            $table->index('area_id', 'area_lead_idxx');

            $table->foreign('lead_id', 'lead_area_fkk')->on('leads')->references('id');
            $table->foreign('area_id', 'area_lead_fkk')->on('areas')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_leads');
    }
};
