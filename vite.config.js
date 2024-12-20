import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',    // Fichier CSS
                'resources/js/app.js',      // Fichier JS principal
                'resources/js/slider.js'    // Ajouter slider.js ici
            ],
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/build', // Spécifie le dossier de sortie pour les fichiers compilés
        manifest: true, // Génère le fichier manifest.json
    },
});
