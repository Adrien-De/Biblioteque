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

    <title>The Rising Shield Hero</title>
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
      <article >
      <div class="content">
        <img class="image" src="../img/TatenoYuusha.jpg" alt="The Rising Shield Hero image"/>
        <div class="text">
        	<h2 class="Bl">The Rising Shield Hero - tome 1</h2>
        	<ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='The Rising shield hero'AND Auteur.idPersonne=24;";
   $result = mysqli_query($link,$req);
               if ($result) {
     // echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong>" . $row["isbn"] ."</li>";
    echo "<li><strong>Type : </strong>" . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF :</strong>" . $row["annee"] ."</li>";
    echo "<li><strong>Scénariste :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='The Rising shield hero' AND Auteur.idPersonne=25;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Dessinateur :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='The Rising shield hero' AND Auteur.idPersonne=26;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Chara-designer :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>";
    echo "<li><strong>Editeur VF : </strong>" . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
        		<li><strong>Éditeur VO :</strong> Media Factory</li>
        		<li><strong>Prix :</strong> 7.50 € / 595 ¥</li>
        		<li><strong>Nombre de pages :</strong> 192</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Action - Aventure - Drame – Fantasy</li>
        		<li><strong>Résumé :</strong><br> Naofumi est projeté dans un monde proche en tout lieu d'un jeu de rôle d'heroic fantasy. Mais alors que d'autres héros ont été dotés d'armes offensives redoutables, Naofumi hérite d'un bouclier aux capacités limitées pour progresser dans ce jeu où le danger peut surgir à chaque instant. Trahi par sa partenaire et vilipendé par la population, le jeune homme ne peut désormais compter que sur lui-même pour survivre dans cet univers hostile… et peut-être sur une jeune fille désœuvrée aux ressources insoupçonnées.</li>
        	</ul>
        </div>
      </div>
      </article>
       <?php require "../aside.php"; ?>

    </main>
        <?php mysqli_close($link); ?> 
  </body>
</html>
