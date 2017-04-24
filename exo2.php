<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Mardi 18 Avril 2017</title>
  </head>

  <body>
<p><?php

// exo 1:
$age = 20;
if($age <= 18)
{
  echo "Vous êtes mineur";
}
else
  {
  echo "Vous êtes majeur";
}
// exo 2:
$genre_s = array("un homme","koolaid1"=> "une femme");
echo "<p>Vous êtes $genre_s[0].</p>".PHP_EOL;
echo "<p>Vous êtes $genre_s[koolaid1].</p>".PHP_EOL;

$age_v = array("mineur","koolaid2"=>"majeur");

echo "<p>Vous êtes $genre_s[0] et vous êtes $age_v[koolaid2]</p>";
echo "<p>vous êtes $genre_s[0] et vous êtes $age_v[0]</p>";
echo "<p>vous êtes $genre_s[koolaid1] et vous êtes $age_v[koolaid2]</p>";
echo "<p>vous êtes $genre_s[koolaid1] et vous êtes $age_v[0]</p>";

// exo 3 :
$genre_2=("");
  if ($genre_2=="un homme")
  {
    echo "Vous êtes un développeur";
  }
  else
  {
    echo "Vous êtes une développeuse!";
  }

// on peut l'écrire avec des opérateurs ternaires comme par exemple
// $variable=(condition)? et on a 2 solutions true : false;
// ceci permet de remplacer les if et else! si on met un point d'exclamation
// devant notre condition cela veut dire que c'est le contraire

// exo 4:
$age2=20;
  if ($age2 >= 18){
    echo "<p>Tu es majeur</p>";
  }
    else {
  echo "<p>Tu n'es pas majeur</p>";
  }
// exo 5 :
$ageM=10;
if ($ageM >= 18)
{
  $majeur = true; echo "<p>tu es majeur</p>";
  $autor_ent ="oui";
}
else {
  $majeur = false; echo "<p>tu n'es pas majeur</p>";
  $autor_ent = "non";
}
echo "avez-vous l'autorisation d'entrer. La réponse est : $autor_ent";

// exo 6 :
$verif=("?");
  if ($verif == "?"){
    echo "<p>Ce n'est pas bon</p>";
  }
  else {
    echo "<p>C'est ok!</p>";
  }

// pour les variables avec du texte il faut mettre 2==

?></p>
  </body>
  </html>
