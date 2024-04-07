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
        Schema::create('mangmentuser2s', function (Blueprint $table) {
            $table->id('id');
            $table->string('email',30);
            $table->string('username',30);
            $table->string('qualification',30);
            $table->string('function',30);
            $table->string('phone');
            $table->string('specialization',30);
            $table->string('type',30);
            $table->string('status',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangmentuser2s');
    }
};
