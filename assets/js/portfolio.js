let swiper = undefined;

// Au chargement de la page
window.addEventListener('load', function () {
    document.querySelectorAll("figcaption[data-project]").forEach(project => {
        project.addEventListener("click", function() { showProject(this.dataset.project); }, false);
    });

    document.querySelector(".bx-x").addEventListener("click", function() {
        closeProject();
    }, false)
});

// Fonction chargée d'afficher un projet
function showProject(project) {
    project = projectProvider(project);
    document.querySelector("#projectContent > .card-header > h1").innerHTML = project.name;
    document.querySelector("#projectDesc #client").innerHTML = "<i class='bx bxs-user'></i>" + project.client;
    document.querySelector("#projectDesc #date").innerHTML = "<i class='bx bxs-calendar'></i>" + project.date;
    document.querySelector("#projectDesc #language").innerHTML = "<i class='bx bx-code-block'></i>" + project.language;
    if(project.url !== undefined) {
        document.querySelector("#projectDesc #url").href = project.url;
    } else {
        document.querySelector("#projectDesc #url").classList.add("hide");
    }
    document.querySelector("#projectDesc #desc").innerHTML = project.description;

    document.getElementById("projectsList").classList.add("hide");
    document.getElementById("projectDesc").classList.remove("hide");

    project.images.forEach(image => {
        // Gestion du clone
        let imageClone = document.importNode(document.getElementById("templateCarousel").content, true);
        imageClone.querySelector("img").src = "stylesheet/IMG/Project/" + image;
        document.querySelector("#carousel > .swiper-wrapper").appendChild(imageClone);
    });

    let nbImageView = 1;
    if(project.imageFormat === "mobile") {
        nbImageView = 4;
    }

    swiper = new Swiper("#carousel", {
        slidesPerView: nbImageView,
        spaceBetween: 0,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        },
    });
}

// Fonction chargée de fermer le projet ouvert
function closeProject() {
    document.querySelector("#projectContent > .card-header > h1").innerHTML = "PORTFOLIO";
    document.querySelector("#projectDesc #client").innerHTML = "";
    document.querySelector("#projectDesc #date").innerHTML = "";
    document.querySelector("#projectDesc #language").innerHTML = "";
    document.querySelector("#projectDesc #url").href = "";
    document.querySelector("#projectDesc #url").classList.remove("hide");
    document.querySelector("#projectDesc #desc").innerHTML = "";

    document.getElementById("projectDesc").classList.add("hide");
    document.getElementById("projectsList").classList.remove("hide");

    const carouselSlide = document.querySelector("#carousel > .swiper-wrapper");
    while (carouselSlide.hasChildNodes()) {
        carouselSlide.removeChild(carouselSlide.lastChild);
    }

    if(swiper !== undefined) {
        swiper.destroy();
        swiper = undefined;
    }
}

// Fonction chargée de fournir les infos sur un projet selon un id
function projectProvider(projectID) {
    const projects = [{
        id: 8,
        name: "Safe-Area",
        images: ["safearea/workInProgress.webp"],
        imageFormat: "computer",
        client: "Projet scolaire",
        date: "Octobre-Maintenant",
        language: "Laravel / Vue.js / Inertia.js / TailwindCSS / SCSS",
        description: "Développement d'une application web permettant à toutes entreprises, de gérer les plaintes de leurs employés de façon sécurisée et anonyme.",
    },
    {
        id: 7,
        name: "Trouvotto",
        images: ["trouvotto/workInProgress.webp"],
        imageFormat: "computer",
        client: "Astronaut-Agency, Alternance de Master",
        date: "Septembre-Octobre 2022",
        language: "Laravel / Vue.js / Inertia.js / TailwindCSS / SCSS",
        description: "Développement d'un site web dont le but est de permettre aux utilisateurs, de trouver leurs voitures idéales en fonction de leurs critères.",
    },
    {
        id: 6,
        name: "Vos Congés",
        images: ["vosConges/workInProgress.webp"],
        imageFormat: "computer",
        client: "Ogiciel, Alternance de LP",
        date: "Juin-Août 2022",
        language: "HTML / CSS / JavaScript / PHP / SQL",
        description: "Développement d'une application web dont le but est de permettre à toute entité, de pouvoir disposer d'un outil de gestion de congés pour ses employés."
    },
    {
        id: 5,
        name: "Votre Position",
        images: ["votrePosition/login.webp", "votrePosition/index.webp", "votrePosition/admin.webp"],
        imageFormat: "computer",
        client: "Ogiciel, Alternance de LP",
        date: "Avril-mai 2022",
        language: "HTML / CSS / JavaScript / PHP / SQL",
        url: "https://votreposition.com/",
        description: "Développement d'une application web dont le but est de permettre à toute entité, de pouvoir disposer d'un outil de tracking pour ses clients, ou salariés."
    },
    {
        id: 4,
        name: "En Relation",
        images: ["enRelation/index.webp", "enRelation/vitrine.webp", "enRelation/buy.webp", "enRelation/admin.webp"],
        imageFormat: "computer",
        client: "Ogiciel, Alternance de LP",
        date: "Octobre-mars 2022",
        language: "HTML / CSS / JavaScript / PHP / SQL",
        url: "https://enrelation.online/",
        description: "Développement d'un site web dont le but est de permettre à toute entité, de pouvoir mettre à disposition simplement ses services en vente sur internet."
    },
    {
        id: 3,
        name: "Stats Clash Royale",
        images: ["statsCR/index.webp", "statsCR/profile.webp", "statsCR/cards.webp", "statsCR/top.webp"],
        imageFormat: "mobile",
        client: "Projet scolaire",
        date: "Mars 2022",
        language: "Swift UiKit",
        description: "Développement d'une application mobile dont le but est de permettre à tous joueurs, d'avoir des informations supplémentaires sur son profil, ou le jeu."
    },
    {
        id: 2,
        name: "Gestion de compte",
        images: ["bank/index.webp", "bank/account.webp", "bank/addAccount.webp"],
        imageFormat: "computer",
        client: "Projet scolaire",
        date: "Janvier 2022",
        language: "Angular / Material Angular",
        description: "Développement d'une application web dont le but est de permettre une gestion personnelle de ses comptes bancaires."
    },
    {
        id: 1,
        name: "Vos Documents",
        images: ["vosDocuments/login.webp", "vosDocuments/index.webp", "vosDocuments/admin.webp"],
        imageFormat: "computer",
        client: "Ogiciel, Stage de DUT",
        date: "Avril-mai 2021",
        language: "HTML / CSS / JavaScript / PHP / SQL",
        url: "https://vosdocuments.online/",
        description: "Développement d'un site web dont le but est de permettre à toute entité, de pouvoir mettre à disposition pour ses clients, ou salariés, des documents. Ils sont accessibles rapidement et depuis n’importent où, selon un niveau d’accréditation."
    }];

    return(projects.filter(project => project.id == projectID)[0]);
}