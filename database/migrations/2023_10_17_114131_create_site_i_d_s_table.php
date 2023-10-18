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
        Schema::create('site_i_d_s', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('PCI');
            $table->string('image_path')->nullable();
            $table->string('email')->default('pci@gmail.com');
            $table->string('phone')->default('instagram.com');
            $table->string('phone2')->nullable();
            $table->string('facebook')->default('facebook.com');
            $table->string('instagram')->default('instagram.com');
            $table->string('twitter')->default('twitter.com');
            $table->string('youtube')->default('youtube.com');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_i_d_s');
    }
};
