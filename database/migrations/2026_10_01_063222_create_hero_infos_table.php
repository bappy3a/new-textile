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
        Schema::create('hero_infos', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('item_title');
            $table->text('item_text')->nullable();
            $table->unsignedInteger('counter_1_number')->default(0);
            $table->string('counter_1_suffix')->nullable();
            $table->string('counter_1_label')->nullable();
            $table->unsignedInteger('counter_2_number')->default(0);
            $table->string('counter_2_suffix')->nullable();
            $table->string('counter_2_label')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_infos');
    }
};
