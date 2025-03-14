<?php 


if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        include('templates/homepage.php');
        break;
    case 'menu';
        include('templates/week.php');
    break;
    default:
    include('templates/404.php');
    break;
} 