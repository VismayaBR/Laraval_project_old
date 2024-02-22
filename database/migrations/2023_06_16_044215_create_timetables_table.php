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
        Schema::create('timetables', function (Blueprint $table) {
            $table->id();
            $table->string('standard',20);
            $table->string('day',30);
            $table->string('s1',30);
            $table->integer('t1');
            $table->string('s2',30);
            $table->integer('t2');
            $table->string('s3',30);
            $table->integer('t3');
            $table->string('s4',30);
            $table->integer('t4');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('timetables');
    }
};
