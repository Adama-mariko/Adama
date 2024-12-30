<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Accueil;

class AccueilFeatureTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_accueil_entry()
    {
        $data = [
            'nom' => 'Mariko',
            'prenom' => 'Adama',
            'telephone' => '0171014594',
            'email' => 'dmsmariko@gmail.com',
            'message' => 'Bonjour, ceci est un message.',
        ];

        $response = $this->post('/accueils', $data);

        $response->assertStatus(201); // Vérifie que la requête a réussi
        $this->assertDatabaseHas('accueils', $data); // Vérifie que l'entrée est dans la base
    }
}
