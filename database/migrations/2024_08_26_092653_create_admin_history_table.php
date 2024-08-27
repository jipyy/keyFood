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
        Schema::create('admin_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('admin_id');
            $table->string('action');
            // $table->text('changes')->nullable()->change();
            $table->string('affected_model')->nullable();
            $table->unsignedBigInteger('affected_model_id')->nullable();
            $table->text('changes')->nullable();
            $table->timestamps();
        
            $table->foreign('admin_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_history');
    }
};