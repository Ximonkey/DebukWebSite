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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('desc',250);
            $table->string('icolor',50);
            $table->string('iperson',50);
            $table->string('iobj',50);
            $table->string('photo',50);
            $table->string('photo2',50);
            $table->string('photo3',50);
            $table->string('model',100);
            $table->string('status',15);
            $table->foreignId('book_id');
            
            $table->timestamps();

            $table->foreign('book_id')->references('id')->on('books');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
