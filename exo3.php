<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Mercredi 19 Avril 2017</title>
  </head>
  <body>
<p><?php
// Eléments essentiels d'un langage de programmation
// les boucles permettent de répéter plusieurs fois une même opération,
// tant qu'une condition est remplie ou bien jusqu'à ce qu'elle soit remplie.
// Comme dans tous les langages de programmation, PHP gère les structures
// de boucle for et while (tant que)

// while veut dire que tant qu'on n'a pas exécuté quelque chose ()
// on a un truc infini, puisque le compteur tourne en continu.
// le compteur par convention est $i, si on a besoin que cela soit
// incrémenter de 1 on écrit 1++ si c'est de 2 c'est 2++
// le "for" on met tout dedans : on initialise le compteur avec ($i=0 ;
// la condition $i<10 et l'incrémentation $i++ c'est à dire qu'il va le faire +1)



// exo 1 : créer une variable initialisée à 0 et tant qu'elle n'atteint pas
// 10 il faut l'afficher et l'incrémenter.

//   for ($i=0; $i<11; $i=$i+1) {
//     echo $i."";
//     }
//
//   for ($i=20; $i<100;$i=$i+5) {
//     echo $i."<p></p>";
//     }
//
// // la boucle foreach est pour les tableaux $tableau = array
// // ("string" index 0, 1 c'est l'index 1, et true )
//
//
// // exo 2:
// $a=0;
// $b=50;
// while ($a>20)
//   {
//   $a=$a*$b;
//   $a++;
//   echo $a."<p></p>";
//   }
//
// // exo 3:
//   echo "<hr>";
// $a=100;
// $b=25;
//   while ($a>=10)
//   {
//   $a=$a*$b;
//   $a--;
//   echo $a."<p><p>";
//   }
//
//       echo "<hr>";
// $c= 8;
// $d=40;
//   while ($d>0)
//   {
//     $d--;
//     echo $d."<br/>";
//   }

// exo 4:
// $e=1;
// while ($e<=10)
// {
//   $e=$e+$e/2;
// echo $e. "<br/>";
// }

// Par exemple une variable =10, tant que (condition while) cette variable est égale à 10, echo rajoute un.
 //condition do et while = avec do { echo $i; $i++;
// } while (jusqu'à ce que) ($<=10);

//
//
// // exo 5:
// echo "<hr>";
// for ($a=1; $a<16; $a=$a+1)
// {
//   echo $a. "on y va";
// }
//
// // exo6 :
// echo "<hr>";
// for ($a=20; $a>=0; $a=$a-1)
// {
//   echo $a. "cest presque bon";
// }

// exo 7 :
for ($a=0; $a<100; $a=$a+15)
{
  echo $a. "<p>on tient le bon bout</p>";
}

$a=0;
while ($a<=100)
{
  $a=$a+15;
  echo $a."avec while";
}

//
// // exo 8:
// for ($a=200; $a>=0; $a=$a-12)
// {
//   echo $a. "enfin!!!";
// }
?></p>
  </body>
  </html>
