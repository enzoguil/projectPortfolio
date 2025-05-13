<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->string('name');
            $table->longText('tasks')->nullable(); // Liste des tâches
            $table->longText('steps')->nullable(); // Étapes
            $table->longText('features')->nullable(); // Fonctionnalités
        });
    }

    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn(['tasks', 'steps', 'features']);
        });
    }
};
