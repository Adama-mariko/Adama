<?php

namespace Tests;

use Illuminate\Contracts\Console\Kernel;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Ce trait permet de créer l'application Laravel pour les tests
trait CreatesApplication
{
    /**
     * Crée l'application Laravel pour les tests.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication(): Application
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase; // Utilisation du trait

    /**
     * Configuration initiale avant chaque test.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
    }
}
