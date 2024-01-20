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
            $table->string('email');
            $table->integer('post_id')->unique();
            $table->text('comment_body');
            $table->timestamps();

            // Add foreign key constraint for 'email'
            $table->foreign('email')
                ->references('email')
                ->on('uzivatels')
                ->onUpdate('cascade') // Choose the appropriate action
                ->onDelete('cascade'); // Choose the appropriate action
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
