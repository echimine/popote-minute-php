<?php

// Code pour afficher le contenu de la page dynamiquement

// On vérifie si la variable $_GET['page'] existe
if (isset($_GET["page"])) {
    $page = $_GET["page"]; // Si elle existe, on envoie l'utilisateur sur la page demandée
} else {
    $page = 'home';  // Sinon, on redirige vers la page d'accueil
}

switch ($page) {
    case 'home': // Si ?page=home
        include('templates/homepage.php'); // On affiche la page d'accueil
        break;
    case 'menu'; // Si ?page=menu
        include('templates/week.php'); // On affiche le menu de la semaine
        break;
    default: // Si la page demandée n'existe pas
        include('templates/404.php'); // On affiche la page 404
        break;
}