<!DOCTYPE html>
<html>
  <head>
     <?php
     $link = mysqli_connect("localhost", "root", "root", "bibliothèque");
  //if(!$link){echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL; exit; }
    
  //echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée bibliothèque a été ouverte." . PHP_EOL;
  //echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
   //var_dump($result);?>

    <meta charset="utf-8">

    <title>Bleach</title>
    <link rel="shortcut icon" href="/biblio_groupe15_etape4/img/Logo2.0.png" type="image/png">
    <link href="stylepage.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="stylepage.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
             <?php require "../header.php"; ?>

    </header>

    <main>
      <article>
      <div class="content">
      
        <img class="image" src="../img/Bleach.jpg" alt="Bleach image"/>
        <div class="text">
        	<h2 class="Bl">Bleach - tome 1</h2>
        	<ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bleach'AND Auteur.idPersonne=8;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong>" . $row["isbn"] ."</li>";
    echo "<li><strong>Type : </strong>" . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF:</strong> " . $row["annee"] ."</li>";
    echo "<li><strong>Auteur :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Livre JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bleach';";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>";
   echo "<li><strong>Editeur VF :</strong> " . $row["libelle"] ."</li>";
}
   mysqli_free_result($result);
}?>
        		<li><strong>Éditeur VO :</strong> Shueisha</li>
        		<li><strong>Prix :</strong> 6.90 € / 420 ¥</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Action - Aventure - Comédie - Drame – Fantastique</li>
        		<li><strong>Résumé :</strong><br> Adolescent de quinze ans, Ichigo Kurosaki possède un don particulier : celui de voir les esprits. Un jour, il croise la route d'une belle Shinigami (un être spirituel) en train de pourchasser une "âme perdue", un esprit maléfique qui hante notre monde et n'arrive pas à trouver le repos.
Mise en difficulté par son ennemi, la jeune fille décide alors de prêter une partie de ses pouvoirs à Ichigo, mais ce dernier hérite finalement de toute la puissance du Shinigami. Contraint d'assumer son nouveau statut, Ichigo va devoir gérer ses deux vies : celle de lycéen ordinaire, et celle de chasseur de démons...</li>
        	</ul>
        </div>
      </div>
      </article>
             <?php require "../aside.php"; ?>

    </main>
     <?php mysqli_close($link); ?> 
  </body>
</html>
