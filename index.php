<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS ELMA SOMBE</title>

    <link rel="shortcut icon" href="asset/img/airtel.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
    :root {
        --primary: #0d6efd;
        --secondary: #198754;
        --dark: #1c2331;
    }

    body {
        font-family: "Segoe UI", sans-serif;
    }

    .navbar {
        background: white;
        box-shadow: 0 2px 15px rgba(0, 0, 0, .08);
    }

    .hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        background:
            linear-gradient(rgba(0, 0, 0, .55),
                rgba(0, 0, 0, .55)),
            url('https://lhommaize.fr/wp-content/uploads/2024/05/ecole-lhommaize-salle-de-classe.jpg');
        background-size: cover;
        background-position: center;
        color: white;
    }

    .hero h1 {
        font-size: 3.5rem;
        font-weight: 800;
    }

    .hero p {
        font-size: 1.2rem;
    }

    .section-title {
        font-weight: 700;
        margin-bottom: 20px;
    }

    .feature-card,
    .cycle-card,
    .option-card {
        border: none;
        border-radius: 15px;
        transition: .3s;
        height: 100%;
    }

    .feature-card:hover,
    .cycle-card:hover,
    .option-card:hover {
        transform: translateY(-8px);
    }

    .icon-box {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        background: #eef4ff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
        color: var(--primary);
        margin-bottom: 15px;
    }

    .stats {
        background: var(--primary);
        color: white;
    }

    .stat-number {
        font-size: 3rem;
        font-weight: 800;
    }

    footer {
        background: var(--dark);
        color: white;
    }

    .btn-action {
        padding: 12px 25px;
        font-weight: 600;
    }

    .carousel-caption {
        background: rgba(0, 0, 0, .45);
        padding: 20px;
        border-radius: 10px;
    }

    .gallery img {
        transition: .4s;
    }

    .gallery img:hover {
        transform: scale(1.05);
    }

    .card {
        transition: .3s;
    }

    .card:hover {
        transform: translateY(-8px);
    }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <img src="asset/img/airtel.png" alt="" srcset="" style="width: 30px; height: 30px" ;>
            <a class="navbar-brand fw-bold text-primary" href="#">
                CS ELMA SOMBE
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="menu">

                <ul class="navbar-nav ms-auto me-3">

                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">À propos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#cycles">Cycles</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#options">Options</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                </ul>

                <a href="inscription_reinsciption.php" class="btn btn-success btn-sm me-2">
                    Inscription/Réinscription
                </a>

                <!-- <a href="#" class="btn btn-warning btn-sm me-2">
                    Réinscription
                </a> -->

                <a href="https://www.cselmasombe.org/parent/" class="btn btn-primary btn-sm">
                    Connexion
                </a>

            </div>

        </div>
    </nav>

    <!-- HERO -->

    <section class="hero">

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

                    <h1>
                        Bienvenue <br> C.S. ELMA SOMBE
                    </h1>

                    <p class="my-4">
                        Une éducation de qualité basée sur l'excellence,
                        la discipline, l'innovation et les valeurs humaines.
                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a href="inscription_reinsciption.php" class="btn btn-success btn-lg btn-action">
                            Inscrire/ Réinscription un élève
                        </a>

                        <!-- <a href="#" class="btn btn-warning btn-lg btn-action">
                            Réinscription
                        </a> -->

                        <a href="https://www.cselmasombe.org/parent/" class="btn btn-light btn-lg btn-action">
                            Espace Parent
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- A PROPOS -->

    <section class="py-5" id="apropos">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-6">

                    <img src="https://img.bestdealplus.com/ae04/kf/H6bbdb64b0a644572994e2447e0da113ai.jpg"
                        class="img-fluid rounded">

                </div>

                <div class="col-lg-6">

                    <h2 class="section-title">
                        À propos de notre école
                    </h2>

                    <p>
                        Le Complexe Scolaire ELMA SOMBE accompagne les élèves
                        de la maternelle aux humanités avec une pédagogie
                        moderne favorisant la réussite scolaire et
                        l'épanouissement personnel.
                    </p>

                    <p>
                        Notre mission est de former des citoyens responsables,
                        compétents et capables de relever les défis de demain.
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- CYCLES -->

    <section class="py-5 bg-light" id="cycles">

        <div class="container">

            <h2 class="text-center section-title">
                Nos cycles d'études
            </h2>

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card cycle-card shadow p-4">
                        <div class="icon-box">
                            <i class="bi bi-balloon"></i>
                        </div>
                        <h5>Maternelle</h5>
                        <p>1ère à 3ème Maternelle</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card cycle-card shadow p-4">
                        <div class="icon-box">
                            <i class="bi bi-book"></i>
                        </div>
                        <h5>Primaire</h5>
                        <p>1ère à 6ème Primaire</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card cycle-card shadow p-4">
                        <div class="icon-box">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <h5>Éducation de Base</h5>
                        <p>7ème et 8ème EB</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card cycle-card shadow p-4">
                        <div class="icon-box">
                            <i class="bi bi-award"></i>
                        </div>
                        <h5>Humanités</h5>
                        <p>1ère à 4ème Humanité</p>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- OPTIONS -->

    <section class="py-5" id="options">

        <div class="container">

            <h2 class="text-center section-title">
                Options organisées
            </h2>

            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card option-card shadow p-4">
                        <h5>Scientifique</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card option-card shadow p-4">
                        <h5>Littéraire</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card option-card shadow p-4">
                        <h5>Commerciale</h5>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card option-card shadow p-4">
                        <h5>Électricité et autres</h5>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- STATS -->

    <section class="stats py-5">

        <div class="container">

            <div class="row text-center">

                <div class="col-md-3">
                    <div class="stat-number">1200+</div>
                    Élèves
                </div>

                <div class="col-md-3">
                    <div class="stat-number">45+</div>
                    Enseignants
                </div>

                <div class="col-md-3">
                    <div class="stat-number">95%</div>
                    Réussite
                </div>

                <div class="col-md-3">
                    <div class="stat-number">40+</div>
                    Ans d'expérience
                </div>

            </div>

        </div>

    </section>

    <!-- POURQUOI NOUS -->

    <section class="py-5">

        <div class="container">

            <h2 class="text-center section-title">
                Pourquoi choisir ELMA SOMBE ?
            </h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card feature-card shadow p-4">

                        <div class="icon-box">
                            <i class="bi bi-laptop"></i>
                        </div>

                        <h5>Éducation moderne</h5>

                        <p>
                            Intégration des outils numériques dans
                            l'apprentissage.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card feature-card shadow p-4">

                        <div class="icon-box">
                            <i class="bi bi-people"></i>
                        </div>

                        <h5>Encadrement de qualité</h5>

                        <p>
                            Une équipe pédagogique expérimentée et engagée.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card feature-card shadow p-4">

                        <div class="icon-box">
                            <i class="bi bi-trophy"></i>
                        </div>

                        <h5>Excellence académique</h5>

                        <p>
                            Des résultats scolaires remarquables.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <section class="py-5">

        <div class="container">

            <h2 class="text-center section-title mb-5" data-aos="fade-up">

                Galerie Photos

            </h2>

            <div class="row g-4">

                <div class="col-md-3" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1588072432836-e10032774350"
                        class="img-fluid rounded shadow">
                </div>

                <div class="col-md-3" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b"
                        class="img-fluid rounded shadow">
                </div>

                <div class="col-md-3" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5"
                        class="img-fluid rounded shadow">
                </div>

                <div class="col-md-3" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7"
                        class="img-fluid rounded shadow">
                </div>

            </div>

        </div>

    </section>

    <section class="py-5 bg-light">

        <div class="container">

            <h2 class="text-center section-title mb-5" data-aos="fade-up">

                Notre Équipe

            </h2>

            <div class="row g-4">

                <div class="col-md-3">

                    <div class="card border-0 shadow h-100" data-aos="fade-up">

                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top">

                        <div class="card-body text-center">

                            <h5>Mme. ELENA PETRUC</h5>

                            <p class="text-muted">
                                Directrice Générale Pédagogique
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card border-0 shadow h-100" data-aos="fade-up" data-aos-delay="100">

                        <img src="asset/img/e6bff55e3730403d56c24e31eb6e5983.jpg.jpeg" class="card-img-top">

                        <div class="card-body text-center">

                            <h5>Me. ALBIN JOSEPH MPUTU</h5>

                            <p class="text-muted">
                                Directeur Général Administratif et financier
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card border-0 shadow h-100" data-aos="fade-up" data-aos-delay="200">

                        <img src="https://randomuser.me/api/portraits/men/56.jpg" class="card-img-top">

                        <div class="card-body text-center">

                            <h5>Me. DAVID LUYAMBA TSHIBUABUA</h5>

                            <p class="text-muted">
                                CHEF D'ETABLISSEMENT
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card border-0 shadow h-100" data-aos="fade-up" data-aos-delay="300">

                        <img src="https://randomuser.me/api/portraits/women/52.jpg" class="card-img-top">

                        <div class="card-body text-center">

                            <h5>Mme. KAPINGA GLOIRIA</h5>

                            <p class="text-muted">
                                Directrice de la Maternelle
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <section class="py-5">

        <div class="container">

            <h2 class="text-center section-title mb-5" data-aos="fade-up">

                Témoignages des Parents

            </h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card shadow border-0 h-100" data-aos="fade-right">

                        <div class="card-body">

                            <p>
                                "Une excellente école.
                                Mes enfants ont beaucoup progressé."
                            </p>

                            <h6 class="mt-3">
                                Mme Mukendi
                            </h6>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card shadow border-0 h-100" data-aos="fade-up">

                        <div class="card-body">

                            <p>
                                "Très bon encadrement et discipline exemplaire."
                            </p>

                            <h6 class="mt-3">
                                M. Kabasele
                            </h6>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card shadow border-0 h-100" data-aos="fade-left">

                        <div class="card-body">

                            <p>
                                "Je recommande fortement
                                le CS ELMA SOMBE."
                            </p>

                            <h6 class="mt-3">
                                Mme Tshibangu
                            </h6>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- CONTACT -->

    <section class="py-5 bg-light" id="contact">

        <div class="container text-center">

            <h2 class="section-title">
                Contactez-nous
            </h2>

            <p>
                Avenue Exemple, Commune Exemple,
                Kinshasa - RDC
            </p>

            <p>
                +243 999 999 999
            </p>

            <p>
                contact@cselmasombe.org
            </p>

        </div>

    </section>

    <!-- FOOTER -->

    <footer class="py-4">

        <div class="container text-center">

            <p class="mb-0">
                © 2026 Complexe Scolaire ELMA SOMBE.
                Tous droits réservés.
            </p>

        </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
    AOS.init({
        duration: 1000,
        once: true
    });
    </script>
</body>

</html>