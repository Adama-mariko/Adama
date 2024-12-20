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
        Schema::create('accueils', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nouvelle colonne 'Nom'
            $table->string('prenom'); // Nouvelle colonne 'Prenom'
            $table->string('telephone'); // Nouvelle colonne 'Téléphone'
            $table->string('email'); // Colonne existante
            $table->text('message'); // Colonne existante
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at'
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accueils');
    }
};
