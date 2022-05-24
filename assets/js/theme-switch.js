if(document.getElementById('switchTheme')) {
    document.getElementById('switchTheme').addEventListener('click', function() {
        switchTheme();
    });
}

// Récupération du cookie "theme" s'il existe, et applique le thème en conséquence
if (document.cookie.split(';').some((item) => item.trim().startsWith('theme='))) {
    const themeCookie = document.cookie.split('; ').find(row => row.startsWith('theme=')).split('=')[1];
    document.querySelector("html").classList.add(themeCookie);
    // Si bouton changement de thème présent sur la page, changement de ce dernier selon le cookie
    if (themeCookie == "dark" && document.getElementById("switch")) {
        document.getElementById("switch").classList.replace("bx-sun", "bx-moon");
    }
} else {
    // Si pas de cookie alors affiche le thème light par défaut
    document.querySelector("html").classList.add("light");
}

// Changement de thème et création du cookie "theme", fonction appelé par l'utilisateur
function switchTheme(){
    if(document.getElementById("switch").classList.contains("bx-sun")) {
        document.cookie = 'theme=dark; path=/; max-age=' + (3600*24*7); // 1 semaine
        document.getElementById("switch").classList.replace("bx-sun", "bx-moon");
        document.querySelector("html").classList.add("dark");
        document.querySelector("html").classList.remove("light");
    } else {
        document.cookie = 'theme=light; path=/; max-age=' + (3600*24*7); // 1 semaine
        document.getElementById("switch").classList.replace("bx-moon", "bx-sun");
        document.querySelector("html").classList.add("light");
        document.querySelector("html").classList.remove("dark");
    }
}