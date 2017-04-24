<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Mardi 18 Avril 2017</title>
  </head>

<!--site développer.com /   -->

  <body>
<p><?php

$nom_visiteur = 'H';
echo "<p>Bonjour $nom_visiteur, comment vas-tu?</p>";

$prenom_visiteur = 'Nad ';
echo "<p>Votre prénom est $prenom_visiteur</p>";

$age_visiteur = 34;
echo '<p>Vous avez '.$age_visiteur. ' ans</p>';

$nbre_km = 1; echo '<p>Vous avez parcouru '.$nbre_km. ' km</p>';
echo "Bonjour $nom_visiteur. $prenom_visiteur tu as $age_visiteur ans";

$pas_de_valeur = null; echo "$pas_de_valeur";

$addition = 3+4 ;echo "<p>$addition</p>";
$mult = 5*20;echo "<p>$mult</p>";
$div = 45/5;echo "<p>$div</p>";
// pas de syntaxe particulière avec les calculs,
// juste nommer sa variable et l'appeler par echo.
// les <p> sont juste pour le saut de ligne (aspect)


// une variable est indiquée par un $ et suivie par sa valeur avec un =
// pour du texte on met des "" (type string); pour un nombre entier pas besoin de "" (type int)
// les boléens sont true et false.
// et les nombres décimaux qui s'écrivent avec un point au lieu d'une virgule (type float)
// '<td>'.'<br/>' = sauter une ligne
// pour concaténer c'est à dire enchaîner les lettres et les chiffres on doit mettre un point. au lieu du +

?></p>

  </body>
  </html>
