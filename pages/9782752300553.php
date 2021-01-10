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

    <title>Excel Saga</title>
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
      
        <img class="image" src="../img/Excel_Saga.png" alt="Excel Saga image"/>
        <div class="text">
        	<h2 class="Bl">Excel Saga - tome 1</h2>
        	<ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Excel Saga'AND Auteur.idPersonne=12;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong> " . $row["isbn"] ."</li>";
    echo "<li><strong>Type :</strong>  " . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF :</strong> " . $row["annee"] ."</li>";
    echo "<li><strong>Auteur :</strong>  " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Livre JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Excel Saga';";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>";
   echo "<li><strong>Editeur VF :</strong>  " . $row["libelle"] ."</li>";
}
   mysqli_free_result($result);
}?>
        		<li><strong>Éditeur VO :</strong> Shonen Gahosha</li>
        		<li><strong>Prix :</strong> 6.90 € / 530 ¥</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Action - Comédie - Drame - Science-fiction</li>
        		<li><strong>Résumé :</strong><br> Le seigneur Il Pallazzio est à la tête de l'organisation secrète Across qui a pour but de dominer le monde. Néanmoins, pour le moment, ce mégalomane en puissance est obligé de revoir ses ambitions à la baisse et de se contenter de projeter d'asservir la ville dans laquelle il vit. Ce ne sera pas non plus une tâche facile à réaliser car Across ne compte que deux membres, Excel une petite idiote hyperactive et Hyatt, une jeune femme à la santé fragile...
            </li>
        	</ul>
        </div>
      </div>
      </article>
             <?php require "../aside.php"; ?>

    </main>
        <?php mysqli_close($link); ?> 
  </body>
</html>