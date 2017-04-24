<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Vendredi 21 Avril 2017</title>
  </head>
  <body>
<p><?php
// pour créer un tableau numéroté en PHP, on utilise généralement la fonction "array" : un array numéroté commence toujours à la case n°0.

$mois =array("janvier","février","mars","avril","mai","juin","juillet","août","septembre","octobre","novembre","décembre");
// pour afficher un élément il faut donner sa position entre crochets après $mois, cela revient à dire à php : "affiche moi le contenu de la case n° de $mois".

// echo $mois[2];
// echo $mois [5];
// on peut également créer manuellement le tableau case par case :
$mois[0]="Janvier";
$mois[1]="Février";
$mois[2]="Mars";
$mois[3]="Avril";
$mois[4]="Mai";
$mois[5]="Juin";
$mois[6]="Juillet";
$mois[7]="Août";
$mois[8]="septembre";
$mois[9]="octobre";
$mois[10]="novembre";
$mois[11]="décembre";

// for ($i=7; $i<8; $i++)
// echo $mois [$i]."le mois d'août";
// Foreach est un autre type de boucle plus adapatée aux tableaux. La boucle foreach va passer en revue chaque ligne du tableau et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (ex :$element).
// d'abord le nom de l'array ici mois, ensuite le mot-clé "as" qui signifie "en tant que" et enfin le nom d'une variable choisie et qui va contenir chacun des éléments de l'array ($element),
// entre les accolades, on n'utilise donc que la variable $element, la boucle s'arrête lorsqu'on a parcouru tous les éléments de l'array.

foreach($mois as $element)
{
  echo $element."<br/>";
}

// exo 5 : création d'un tableau associatif
echo "<hr>";

$departements = array (
  "02" => "Aisne",
  "59" => "Nord",
  "60" => "Oise",
  "62" => "Pas de calais",
  "80" => "somme");
  echo $departements["59"];
  echo $departements ["80"];
// $departements [""]= ceci ajoute un nouvel élément au tableau avec la clé""
$departements ["51"]="Reims";
echo $departements ["51"];

// POUR RECUPERER LA CLE DE L'ELEMENT ET SA VALEUR on doit écrire foreach :
foreach ($departements as $cle =>$element)
{
  echo "$cle est le département ".$element."<br/>";
}


?></p>
  </body>
  </html>
