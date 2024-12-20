<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accueil extends Model
{
    use HasFactory;

     protected $fillable = ['nom', 'prenom', 'telephone', 'email', 'message'];
     public function up()
     {
         Schema::create('accueils', function (Blueprint $table) {
             $table->id();
             $table->string('nom'); // Nouvelle colonne 'Nom'
             $table->string('prenom'); // Nouvelle colonne 'Prenom'
             $table->string('telephone'); // Nouvelle colonne 'Téléphone'
             $table->string('email'); // Colonne existante
             $table->text('message'); // Colonne existante
             $table->timestamps(); // Ajoute created_at et updated_at
         });
     }
 
     public function down()
     {
         Schema::dropIfExists('accueils');
     }
}
