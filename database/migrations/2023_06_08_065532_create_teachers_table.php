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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->integer('lid');
            $table->string('t_name',50);
            $table->string('email',40);
            $table->string('t_mobile',10);
            $table->string('t_place',40);
            $table->string('qualification',50);
            $table->integer('block')->default(0);
            $table->string('image',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
