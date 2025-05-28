<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom de la compétence
            $table->string('image')->nullable(); // Chemin de l'image
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->longText('description')->nullable(); // Liste des tâches
        });

        // Table pivot pour relier les projets aux compétences
        Schema::create('project_skill', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained()->onDelete('cascade');
            $table->foreignId('skill_id')->constrained()->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('project_skill');
        Schema::dropIfExists('skills');
    }
};
