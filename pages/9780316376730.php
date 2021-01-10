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

    <title>Accel World</title>
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
      
        <img class="image" src="../img/AccelWorld.jpg" alt="Accel World image"/>
        <div class="text">
        	<h2 class="Bl">Accel World - tome 1</h2>
        	<ul>
            <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Accel World'AND Auteur.idPersonne=1;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong>" . $row["isbn"] ."</li>";
    echo "<li><strong>Type :</strong> " . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF : </strong>" . $row["annee"] ."</li>";
    echo "<li><strong>Scénariste :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Accel World'AND Auteur.idPersonne=2;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Dessinateur :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";
    echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>"; 
    echo "<li><strong>Editeur VF : </strong>" . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li><strong>Éditeur VO :</strong> ASCII Media Works</li>
<li><strong>Illustrations :</strong> N&B</li>
<li><strong>Prix :</strong> 6.99 € / 599 ¥</li>
<li><strong>Genres :</strong> Action - Drame - Romance - School Life - Science-fiction</li>
<li><strong>Résumé :</strong><br> Dans les années 2056, le monde est devenu totalement dépendant de toutes les technologies. Haruyuki Arita, étudiant et passionné par son jeu de squash sur Neuro-linker, n'en décroche que pour les cours. Persécuté par les autres en raison de son obésité, il n'a pas vraiment d'ami. Un jour comme les autres, une dénommée Kuroyukihime lui fait une proposition : aller encore plus vite. Curieux, Arita accepte, et accède à un programme sur-développé, le Burst-link, lui permettant d'accroître ses capacités mentales. Le voila parti pour un voyage inoubliable !</li>
        	</ul>
        </div>
      </div>
      </article>
    
       <?php require "../aside.php"; ?>
<?php mysqli_close($link); ?> 
    </main>
  </body>
</html>
