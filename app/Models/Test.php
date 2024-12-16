<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
      public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->timestamps(); // Ajoute created_at et updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
