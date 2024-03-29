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
        Schema::create('odpovedes', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('comment_id')->nullable();
            $table->string('meno')->nullable();
            $table->string('odpoved')->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('odpovedes');
    }
};
