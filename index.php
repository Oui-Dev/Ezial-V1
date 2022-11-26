<?php
    include("assets/php/private/csp.php");
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="all">
        <meta name="viewport" content="width=device-width, initial-scale=0.9" />
        <meta name="description" content="Bienvenue sur ma page de présentation.">
        <meta name="theme-color" content="#232931" />
        <!-- <meta name="theme-color" content="#091232" /> -->
        <link rel="canonical" href="https://ezial.fr/">
        <link rel="stylesheet" href="stylesheet/CSS/StyleMain.css" />
        <link rel="stylesheet" media="(min-width: 768px) and (max-width: 1388px)" href="stylesheet/CSS/StyleMedium.css" />
        <link rel="stylesheet" media="(max-width: 767px)" href="stylesheet/CSS/StyleSmall.css" />
        <link nonce="<?= $csp_nonce; ?>" rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
        <link rel="stylesheet" href="libraries/SnackBar/dist/snackbar.min.css" />
        <link rel="icon" href="stylesheet/icone.ico" />
        <title>Kévin</title>
    </head>

    <body>
        <!-- Header -->
        <header>
            <a class="headerBtn right" id="switchTheme">
                <i class='bx bx-sun' id="switch"></i>
            </a>
        </header>

        <!-- Begin content -->
        <div class="card" data-state="#about">
            <div class="card-header">
                <div class="card-cover"></div>
                <img class="card-avatar" src="stylesheet/IMG/pp.webp" alt="avatar" />
                <h1 class="card-fullname">Kévin Blaise</h1>
                <h2 class="card-jobtitle">Développeur full-stack</h2>
            </div>
            <div class="card-main">
                <!-- Section 1 (About) -->
                <div class="card-section is-active" id="about">
                    <div class="card-content">
                        <div class="card-subtitle">Si vous êtes arrivé là,</div>
                        <p class="card-desc">c'est sans doute que vous voulez en savoir plus sur moi, ou que mon profil a attiré votre curiosité.</p>
                        <p class="card-desc">En quelques mots...</p>
                        <p class="card-desc">Méticuleux, investi, autonome sont les trois adjectifs qui me définissent le mieux au travail.</p>
                        <p class="card-desc">Parallèlement, je suis un bon vivant et je sais m'adapter à tout environnement.</p>
                    </div>
                    <div class="card-social">
                        <a href="portfolio" id="portfolio">Portfolio</a>
                        <a href="https://www.linkedin.com/in/k%C3%A9vin-blaise/" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        <a href="https://www.instagram.com/kevin.blse/" target="_blank"><i class='bx bxl-instagram-alt'></i></a>
                    </div>
                </div>
                <!-- Section 2 (Timeline) -->
                <div class="card-section" id="experience">
                    <div class="card-content">
                        <div class="card-subtitle">Expériences professionnelles</div>
                        <div class="card-timeline">
                            <div class="card-item" data-year="2023">
                                <div class="card-item-title">Développeur full-stack, <span>Astronaut-Agency</span></div>
                                <div class="card-item-desc">Alternance pour mon Master : Je suis chargé du développement full stack de divers projets.</div>
                            </div>
                            <div class="card-item" data-year="2022">
                                <div class="card-item-title">Développeur full-stack, <span>OGICIEL</span></div>
                                <div class="card-item-desc">Alternance pour ma licence professionnelle : Je suis chargé du développement full stack de divers projets.</div>
                            </div>
                            <div class="card-item" data-year="2021">
                                <div class="card-item-title">Développeur full-stack, <span>OGICIEL</span></div>
                                <div class="card-item-desc">Stage de deuxième année de DUT : J'étais chargé du développement full stack d’un site web, permettant un accès à des documents selon divers paramètres.</div>
                            </div>
                            <div class="card-item" data-year="2020">
                                <div class="card-item-title">Employé Polyvalent, <span>Thiriet</span></div>
                                <div class="card-item-desc">Intérim pour un total de plus de 400h. J’étais aussi bien chargé de tâches d’entretien, de tâches administratives ou encore hôte de caisse / magasinier.</div>
                            </div>
                            <div class="card-item" data-year="2015">
                                <div class="card-item-title">Informatique, <span>À mon compte</span></div>
                                <div class="card-item-desc">Maintenance, dépannage informatique et Hardware.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section 3 (Contact) -->
                <div class="card-section" id="contact">
                    <div class="card-content">
                        <div class="card-subtitle">Contact</div>
                        <div class="card-contact-wrapper">
                            <div class="card-contact">
                                <i class='bx bx-map'></i>
                                <a href="https://www.google.com/maps/place/88100+Saint-Di%C3%A9-des-Vosges/" target="_blank">Lyon, 69003</a>
                            </div>
                            <div class="card-contact">
                                <i class='bx bx-phone'></i>
                                <a href="tel:+33781702022">07 81 70 20 22</a>
                            </div>
                            <div class="card-contact">
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:kevin.blaise24@gmail.com">kevin.blaise24@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-form" id="contactMeDiv">
                        <button data-section="#contactForm" class="contact-me">ME CONTACTER</button>
                    </div>
                </div>
                <!-- Section 4 (Contact Form) -->
                <div class="card-section" id="contactForm">
                    <div class="card-content">
                        <div class="card-subtitle">Formulaire de contact</div>
                        <form action="assets/php/dataUpdate?loc=index" method="post" enctype="application/x-www-form-urlencoded" class="card-contact-wrapper">
                            <div class="multiInput">
                                <div class="form-control">
                                    <input type="text" placeholder="Nom..." name="nom" id="nom" maxlength="30">
                                    <small>Nom invalide</small>
                                </div>
                                <div class="form-control">
                                    <input type="text" placeholder="Prénom..." name="prenom" id="prenom" maxlength="30">
                                    <small>Prénom invalide</small>
                                </div>
                            </div>
                            <div class="form-control">
                                <input type="text" placeholder="Email..." name="email" id="email">
                                <small>Email invalide</small>
                            </div>
                            <div class="form-control">
                                <textarea placeholder="Contenu..." name="content" rows="8" maxlength="2000"></textarea>
                                <small>Contenu invalide</small>
                            </div>
                            <button type="submit" name="send" class="contact-me">ENVOYER</button>
                        </form>
                    </div>
                </div>
                <!-- Nav Btn -->
                <div class="card-buttons">
                    <button data-section="#about" class="is-active">À propos</button>
                    <button data-section="#experience">Expérience</button>
                    <button data-section="#contact">Contact</button>
                </div>
            </div>
        </div>
        <!-- End content -->

        <!-- Script -->
        <script nonce="<?= $csp_nonce; ?>" type="text/javascript" src="assets/js/index.js"></script>
        <script nonce="<?= $csp_nonce; ?>" type="text/javascript" src="assets/js/theme-switch.js"></script>
        <script nonce="<?= $csp_nonce; ?>" type="text/javascript" src="assets/js/checkForm.js"></script>
        <script nonce="<?= $csp_nonce; ?>" src="libraries/SnackBar/dist/snackbar.min.js"></script>
    </body>
</html>