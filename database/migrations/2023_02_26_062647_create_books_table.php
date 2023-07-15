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
            $table->string('title',100);
            $table->date('date');
            $table->string('desc',500);
            $table->string('img',50);
            $table->string('age',10);
            $table->string('author',50);
            $table->foreignId('category_id');
            $table->foreignId('language_id');
            $table->string('pag',3);
            $table->string('status',15);
            
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('language_id')->references('id')->on('languages');
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
