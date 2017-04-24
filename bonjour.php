<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html";meta charset="utf-8"/>
    <title>Lundi 24 Avril 2017</title>
</head>

  <body>

<p>
  <?php
  if (isset($_GET['prenom']) AND isset($_GET['nom']))
  {
  echo 'Bonjour '.$_GET['prenom'] .' ' .$_GET['nom'];
  }
  else {
  echo "alors!";}

if (isset($_GET['age']))
{
  echo 'tu as '.$_GET['age'] .'ans';
}
else {
  echo "aucunage";
}

// ici on teste si les variables prenom et nom existent, si oui on dit bonjour au visiteur;
// s'il manque une ou des variables, on affiche un message "alors"
?>
  </p>

  </body>
  </html>
