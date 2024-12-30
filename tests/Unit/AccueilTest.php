<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Accueil;

class AccueilTest extends TestCase
{
    public function test_fillable_attributes()
    {
        $accueil = new Accueil();

        $this->assertEquals(
            ['nom', 'prenom', 'telephone', 'email', 'message'],
            $accueil->getFillable()
        );
    }
}
