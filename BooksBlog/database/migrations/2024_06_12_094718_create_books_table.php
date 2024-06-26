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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            //$table->foreign('id')->references('id')->on('files')->onDelete('cascade');
            $table->string('title');
            $table->string('auther');
            $table->foreignId('user_id')->constrained()->onDelete('CASCADE');
            $table->string('description');
            $table->string('publish_year');
            $table->string('downloads')->nullable();
            $table->string('avatar_path')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
