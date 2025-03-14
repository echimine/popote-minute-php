<?php

$week = json_decode(file_get_contents('json/week.json'), true);
// var_dump($week);
echo '<main>';
echo "<h1>Menu de la semaine</h1>";
echo "<table>";
echo "<thead>
<tr>
<th>Date</th>
<th>Plat</th>
<th>Description</th>
<th>Prix</th>
<th>Photo</th>
<th>Dessert</th>
<th>Description</th>
<th>Prix</th>
<th>Photo</th>
</tr>
</thead>";
echo "<tbody>";
echo "<tbody>";
foreach ($week as $day => $menu) {
    echo "<tr>";
    echo "<td>" . $menu['date'] . "</td>";
    echo "<td>" . $menu['plat']['name'] . "</td>";
    echo "<td>" . $menu['plat']['description'] . "</td>";
    echo "<td>" . $menu['plat']['price'] . "€</td>";
    echo "<td><img src='images/" . $menu['plat']['photo'] . "' alt='Plat du jour'></td>";
    echo "<td>" . $menu['dessert']['name'] . "</td>";
    echo "<td>" . $menu['dessert']['description'] . "</td>";
    echo "<td>" . $menu['dessert']['price'] . "€</td>";
    echo "<td><img src='images/" . $menu['dessert']['photo'] . "' alt='Dessert du jour'></td>";
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo '</main>';
?>