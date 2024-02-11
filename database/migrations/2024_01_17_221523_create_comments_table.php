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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('meno')->nullable();
            $table->string('comment_body')->nullable();
            $table->string('photo_path')->nullable(); // Stĺpec pre uloženie cesty k obrázku
            $table->timestamps();

            // Foreign key pre 'email'
            $table->foreign('email')
                ->references('email')
                ->on('uzivatels')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
