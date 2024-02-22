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
        Schema::create('Students', function (Blueprint $table) {
            $table->id();
            $table->integer('lid');
            $table->string('name',50);
            $table->date('date_of_birth');
            $table->string('place',40);
            $table->string('mobile',10);
            $table->string('parent_name',40);
            $table->integer('standard');
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Students');
    }
};
