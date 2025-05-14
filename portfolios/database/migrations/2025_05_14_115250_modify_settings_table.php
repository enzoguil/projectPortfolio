<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
            // Supprimer la contrainte d'unicité sur la colonne 'key'
            $table->dropUnique(['key']);

            // Supprimer la clé primaire existante (si elle existe)
            $table->dropPrimary();

            // Ajouter une clé primaire composite sur 'user_id' et 'key'
            $table->primary(['user_id', 'key']);
        });
    }

    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            // Supprimer la clé primaire composite
            $table->dropPrimary(['user_id', 'key']);

            // Restaurer la contrainte d'unicité sur 'key'
            $table->unique('key');

            // Restaurer la clé primaire par défaut (si nécessaire)
            $table->id(); // Si la table avait une colonne 'id' comme clé primaire
        });
    }
};
