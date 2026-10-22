<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('handmades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('artisan');
            $table->unsignedBigInteger('price');
            $table->string('material');
            $table->string('image');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('handmades');
    }
};
