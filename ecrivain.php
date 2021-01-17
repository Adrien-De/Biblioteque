<!DOCTYPE html>
<html>
  <head>
    
    <meta charset="utf-8">

    <title>Overlord</title>
    <link rel="shortcut icon" href="/biblio_groupe15_etape4/img/Logo2.0.png" type="image/png">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    <?php
    $link = mysqli_connect("localhost", "root", "root", "bibliogroupe15");
  //if(!$link){echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL; exit; }
    
  //echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée bibliothèque a été ouverte." . PHP_EOL;
  //echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
   //var_dump($result);?>
  </head>
  <body>

    <header>
 <?php require "header.php"; ?>
    </header>

    <main>
      <article>
<?php $req = "SELECT Role.libelle AS role,Personne.nom AS nom, Personne.prenom AS prenom 
FROM Auteur LEFT JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Role.libelle='Auteur' GROUP BY Livre.isbn,Role.libelle, Personne.nom,Personne.prenom;";?>

<div class="container">
<h2>Les Auteurs</h2> 
              <?php $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";

   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo "<ul>";
echo "<li>".$row["role"].": ".$row["nom"]." ".$row["prenom"]."</li>";
echo "</ul>";
}mysqli_free_result($result);}?>
   
        </div>
      </article>
   <?php require "aside.php"; ?>
    </main>
       <?php mysqli_close($link); ?> 
  </body>
</html>