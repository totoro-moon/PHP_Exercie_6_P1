<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 6 Partie 1</title>
</head>
<body>
    <h1># exercice 6</h1>
<!-- <p>Créez une variable magnitude allant de 1 à 9. Gérez l'affichage selon la magnitude.</p>
<p>1. Micro-séisme impossible à ressentir</p>
<p>2. Micro-séisme impossible à ressentir mais enregistrable par les sismomètres</p>
<p>3. Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti</p>
<p>4. Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats</p>
<p>5. Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes</p>
<p>6. Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre</p>
<p>7. Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance</p>
<p>8. Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres</p>
<p>9. Séisme capable de tout détruire sur une très vaste zone -->
<?php
$magnitude = (random_int(1,9));
echo 'Attention un séisme de magnitude : ' .$magnitude. ' !! ';

switch ($magnitude) {
    case 1:
        echo 'Micro-séisme impossible à ressentir.';
        break;
    case 2:
        echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
        break;
    case 3:
        echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
        break;
    case 4:
        echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
        break;
    case 5:
        echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
        break;
    case 6:
        echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
        break;
    case 7:
        echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
        break;
    case 8:
        echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
        break;
    case 9:
        echo 'Séisme capable de tout détruire sur une très vaste zone.';
        break;
}
?>
</body>
</html>