<?php
// Charger le menu dynamique depuis le fichier JSON
$menu = json_decode(file_get_contents('json/menu.json'), true);
?>

<header>
    <nav>
        <ul>
            <?php
            //création de la liste 
            foreach ($menu as $item) {
                echo "<li><a href='" . $item['link'] . "'>" . $item['name'] . "</a></li>";
            }
            ?>
        </ul>
    </nav>
</header>