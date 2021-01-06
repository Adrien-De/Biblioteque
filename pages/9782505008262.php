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

    <title>Bakuman</title>
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
      
        <img class="image" src="../img/Bakuman.jpg" alt="Bakuman image"/>
        <div class="text">
        	<h2 class="Bl">Bakuman - tome 1</h2>
        	<ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bakuman'AND Auteur.idPersonne=3;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN :</strong> " . $row["isbn"] ."</li>";
    echo "<li><strong>Type :</strong> " . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF : </strong>" . $row["annee"] ."</li>";
    echo "<li><strong>Scénariste : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Bakuman' AND Auteur.idPersonne=4;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Dessinateur : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bakuman' AND Auteur.idPersonne=5;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Traducteur : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>";
    echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>";  
    echo "<li><strong>Editeur VF: </strong>" . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
        		<li><strong>Éditeur VO :</strong> Shueisha</li>
        		<li><strong>Prix :</strong> 6.85 € / 420 ¥</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Comédie - Slice of Life</li>
        		<li><strong>Résumé :</strong><br> Moritaka Mashiro est un étudiant de 14 ans banal si ce n'est qu'il a un certain don pour le dessin, un jour il oublie son cahier de maths, sur lequel il avait déssiné la fille qu'il aime, Miho Azuki, dans la salle de cours. Akito Takagi, le premier de la classe, découvre le cahier ainsi que les talents de déssinateur de Mashiro et propose à celui-ci de devenir Mangaka avec lui, Takagi en tant que scénariste et Mashiro en tant que dessinateur, Mashiro refuse cette proposition au début, mais va finalement l'accepter pour une seule motivation qui est liée à Miho Azuki qui elle veut devenir seiyû, c'est alors que débute leur aventure en tant que Mangaka !</li>
        	</ul>
        </div>
      </div>
      </article>
       <?php require "../aside.php"; ?>
    </main>
    <?php mysqli_close($link); ?> 
  </body>
</html>
