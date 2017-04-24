<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Lundi 24 Avril 2017</title>
  </head>
  <body>
<p><?php
// exo 1 :

function direvrai($vrai)
{
  echo "$vrai!<br/>";
}
direvrai ("true");

// exo 3 :
$chaine1="essai";
$chaine2="en php";
echo "$chaine1 $chaine2";
$chaine1 = strtoupper($chaine1);
echo $chaine1;

// exo4 :
// je crée la fonction avec function le nom que je veux et les variables à
// l'intérieur de la parenthèse, ensuite je lui dis ce qu'il doit faire là les conditions,
// puis tout en bas je n'ai pas besoin de tout écrire mais juste le nom de ma
// fonction et les valeurs de mes variables.

function essai($par1,$par2)
{
  if ($par1<$par2){
    echo "<p>le premier nombre est plus petit</p>";
  }
  elseif ($par1==$par2) {
    echo "<p> les deux nombres sont identiques</p>";
  }
    else{
    echo "<p>le premier nombre est plus grand</p>";
  }
}
essai(50,30);

// exo 5:
echo "<hr>";
// quand ce sont des variables pas besoin de "", et quand tu rappelles la fonction
// il faut mettre chaque $ entre ""et les séparer par une virgule, tout cela entre ().

function parametre($nbre,$ch)
  {
  echo $nbre.$ch;
  }
parametre("500"," test du lundi");

// exo 6:
echo "<hr>";
function donnees($nom, $prenom, $age)
{
  echo "bonjour ", $nom, " ", $prenom, " ,tu as", $age, " ans";
}
donnees("hav","nad","34");

// exo 7:
echo "<hr>";
function essai8($sexe, $maj){
    if (($sexe=="h") && ($maj<18)){
    echo "Vous êtes un homme et vous êtes mineur";
    }
    elseif (($sexe=="h") && ($maj>18)){
    echo "Vous êtes un homme et vous êtes majeur";
    }
    elseif (($sexe=="f") && ($maj<18)){
    echo "Vous êtes une femme et vous êtes mineure";
    }
    else {
    echo "Vous êtes une femme et vous êtes majeure";
    }
    }
essai8("femme","34");

// exo8 :
echo "<hr>";
function calcul($nbre1, $nbre2, $nbre3) {
  $essaical=$nbre1+$nbre2+$nbre3;
  return $essaical;
  }
$essaical = calcul(20, 5, 10);
echo "la somme est de ". $essaical;
// on crée une fonction calcul qui va calculer la somme des 3 nombres;
// L'Instruction "return" indique ce que doit renvoyer la fonction, elle me renvoie le calcul.
// ensuite la fonction renvoie une valeur ici (5*3);
// ensuite on peut afficher ce que contient la variable à l'aide d'écho.

?></p>
</body>
</html>
