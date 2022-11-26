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
        <link rel="canonical" href="https://ezial.fr/portfolio">
        <link rel="stylesheet" href="stylesheet/CSS/StyleMain.css" />
        <link rel="stylesheet" media="(min-width: 768px) and (max-width: 1388px)" href="stylesheet/CSS/StyleMedium.css" />
        <link rel="stylesheet" media="(max-width: 767px)" href="stylesheet/CSS/StyleSmall.css" />
        <link nonce="<?= $csp_nonce; ?>" rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />
        <link nonce="<?= $csp_nonce; ?>" rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
        <link rel="icon" href="stylesheet/icone.ico" />
        <title>Portfolio</title>
    </head>

    <body>
        <!-- Header -->
        <header>
            <a href="index" class="headerBtn left">
                <i class='bx bx-arrow-back'></i>
            </a>
            <a class="headerBtn right" id="switchTheme">
                <i class='bx bx-sun' id="switch"></i>
            </a>
        </header>

        <!-- Content -->
        <div class="card" id="projectContent">
            <div class="card-header">
                <div class="card-cover"></div>
                <h1>PORTFOLIO</h1>
            </div>
            <!-- Projects List -->
            <ul class="grid" id="projectsList">
                <li>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/safearea/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="8">
                            <h2>Safe-<span>Area</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/trouvotto/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="7">
                            <h2>Trouvotto</h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/vosConges/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="6">
                            <h2>Vos<br><span>Congés</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/votrePosition/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="5">
                            <h2>Votre<br><span>Position</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/enRelation/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="4">
                            <h2>En<br><span>Relation</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/statsCR/illu.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="3">
                            <h2>Stats<br><span>Clash Royale</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/bank/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="2">
                            <h2>Gestion<br><span>de compte</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                    <figure class="projectCard">
                        <img src="stylesheet/IMG/Project/vosDocuments/index.webp" alt="Illustration"/>
                        <div class="darkBG"></div>
                        <figcaption data-project="1">
                            <h2>Vos<br><span>Documents</span></h2>
                            <i class='bx bx-plus'></i>
                        </figcaption>
                    </figure>
                </li>
            </ul>

            <!-- Project description -->
            <div class="hide" id="projectDesc">
                <i class='bx bx-x'></i>
                <!-- Carousel -->
                <template id="templateCarousel">
                    <div class="swiper-slide"><img src="" alt="Project image"></div>
                </template>
                <div>
                    <div class="swiper" id="carousel">
                        <div class="swiper-wrapper">
                            <!-- Clone -->
                        </div>
                        <div class="button-next"><i class='bx bx-chevron-right'></i></div>
                        <div class="button-prev"><i class='bx bx-chevron-left'></i></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Informations -->
                <h3>Le projet</h3>
                <p id="client"></p>
                <p id="date"></p>
                <p id="language"></p>
                <a href="" target="_blank" id="url"><i class='bx bx-link'></i>Y accéder</a>
                <p id="desc"></p>
            </div>
        </div>

        <!-- Script -->
        <script nonce="<?= $csp_nonce; ?>" src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
        <script nonce="<?= $csp_nonce; ?>" type="text/javascript" src="assets/js/portfolio.js"></script>
        <script nonce="<?= $csp_nonce; ?>" type="text/javascript" src="assets/js/theme-switch.js"></script>
    </body>
</html>