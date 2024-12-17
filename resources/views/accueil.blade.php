@extends('template')

@section('title', 'Accueil - Mon Portfolio')

@section('content')
    <!-- Section Hero -->
    <section id="accueil" class="hero">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p>Je suis un développeur passionné par la création d'applications web et mobiles.</p>
        <a href="#projets" class="btn">Découvrir mes projets</a>
    </section>

    <!-- Section Projets -->
    <section id="projets">
        <h2>Mes Projets</h2>
        <div class="projet-container">
            <div class="projet">
                <h3>Projet 1</h3>
                <p>Description de votre projet ici.</p>
            </div>
            <div class="projet">
                <h3>Projet 2</h3>
                <p>Description de votre projet ici.</p>
            </div>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="a-propos">
        <h2>À Propos de Moi</h2>
        <p>Je suis un étudiant en informatique passionné par le développement d'applications et les nouvelles technologies.</p>
    </section>

    <!-- Section Contact -->
    <section id="contact">
        <h2>Contactez-moi</h2>
        <form action="#" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section>
@endsection
