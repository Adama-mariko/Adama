@extends('template')

@section('title', 'Mon Portfolio')

@section('content')
    <!-- Section Hero -->
    <section class="hero">
        <div class="accueil">
            <h1>Bienvenue sur mon Portfolio</h1>
            <p>En tant que développeur débutant passionné par le monde de la technologie, je me spécialise dans la création d'applications web et mobiles. Actuellement en formation sur des outils modernes tels que Flutter, WordPress, JSON et Laravel, j’ai déjà une solide maîtrise de PHP, HTML et CSS. Toujours curieux et en quête d'innovation, j'aime repousser les limites de la programmation pour créer des expériences exceptionnelles. En dehors du code, je suis également un grand amateur de football, une passion qui m'apprend la persévérance et le travail d'équipe. Diplômé d'un Bac D, je suis prêt à relever tous les défis du développement !</p>
            <a href="#projets" class="btn">Découvrir mes projets</a>
        </div>
        <div class="droit">
            <img src="{{ asset('images/adama.jpg') }}" alt="mon joli image">
        </div>
    </section>

    <!-- Section compétences avec Slider -->
    <section id="competences">
    <h2>Mes Compétences</h2>
    <div class="slider-wrapper">
        <!-- Boutons de navigation -->
        <span id="prevBtn" class="slider-btn">&lt;</span>
        <div class="competences-container">
            @foreach($competences as $competence)
                <div class="container">
                    <div class="competence">
                        <img src="{{ asset('images/' . $competence['image']) }}" alt="{{ $competence['name'] }}">
                    </div>
                    <p>{{ $competence['name'] }}</p>
                </div>
            @endforeach
        </div>
        <span id="nextBtn" class="slider-btn">&gt;</span>
    </div>
      <!-- Indicateurs sous les images -->
      <div class="slider-indicators">
        @foreach($competences as $index => $competence)
            <span class="indicator" data-index="{{ $index }}"></span>
        @endforeach
      </div>
</section>
<section id="presentation">
    <div class="mariko-text">
        <p><strong>Mariko Adama</strong> - Développeur web et mobile, à la recherche de nouvelles opportunités professionnelles.</p>
    </div>
</section>
  
                 
    <!-- Section À propos -->
    <section id="propos">
                 <div class="pc">
                      <img src="{{ asset('images/pc.jpg') }}" alt="Image spécifique">
                 </div>
        <div class="text-container">
            <h2>À Propos de Moi</h2>
            <p>Je suis un étudiant en informatique passionné par le développement d'applications et les nouvelles technologies.</p>

            <p><strong>Développeur web et mobile</strong> avec une expérience dans la conception et le déploiement d'applications utilisant <strong>Laravel</strong> et <strong>React Native</strong>.</p>
            
            <p><strong>Titulaire d'un BTS en informatique</strong>, je m'intéresse particulièrement aux technologies émergentes et à l'optimisation des performances d'applications.</p>

            <p>Je recherche actuellement un <strong>poste de développeur</strong> où je pourrais mettre à profit mes compétences en développement d'applications tout en continuant à progresser dans un environnement dynamique et innovant.</p>
        </div>
    </section>


    <section id="contact" class="form-container">
        <h2>Contactez-moi</h2>
        <form action="{{ route('accueil.store') }}" method="POST" id="contact-form">
            @csrf <!-- Protection CSRF obligatoire -->

            <!-- Champ pour le nom -->
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>
                @error('nom')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ pour le prénom -->
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>
                @error('prenom')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ pour le téléphone -->
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="text" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                @error('telephone')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ pour l'email -->
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Champ pour le message -->
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Bouton d'envoi -->
            <button type="submit" class="btn">Envoyer</button>
        </form>
    </section>

@endsection
