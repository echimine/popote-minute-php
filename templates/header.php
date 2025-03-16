<?php
// Code pour afficher dynamiquement les pages dans le header
// Charger le menu dynamique depuis le fichier JSON
$menu = json_decode(file_get_contents('json/menu.json'), true);
?>

<header>
    <nav>
        <ul>
            <?php
            //Création de la liste 
            foreach ($menu as $item) {
                echo "<li><a href='" . $item['link'] . "'>" . $item['name'] . "</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>