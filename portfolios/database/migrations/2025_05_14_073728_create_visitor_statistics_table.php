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
        Schema::create('visitor_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('ip_address'); // Adresse IP du visiteur
            $table->string('url'); // URL visitée
            $table->timestamp('visited_at'); // Date et heure de la visite
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_statistics');
    }
};
