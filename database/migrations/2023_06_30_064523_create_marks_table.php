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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('s1',50);
            $table->string('s2',50);
            $table->string('s3',50);
            $table->string('s4',50);
            $table->integer('m1');
            $table->integer('m2');
            $table->integer('m3');
            $table->integer('m4');
            $table->integer('std_id');
            $table->string('marklist',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
