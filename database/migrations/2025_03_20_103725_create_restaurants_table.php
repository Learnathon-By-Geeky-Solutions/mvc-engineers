<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('type');
            $table->string('description');
            $table->string('cuisine');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('website');
            $table->string('opening_time');
            $table->string('closing_time');
            $table->string('days_open');
            $table->string('logo')->nullable();
            $table->string('photos')->nullable();
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
