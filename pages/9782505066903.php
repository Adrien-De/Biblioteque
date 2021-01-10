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

    <title>Sky High Survival</title>
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
      
        <img class="image" src="../img/Sky_high_survival.jpg" alt="Sky High Survival image"/>
        <div class="text">
        	<h2 class="Bl">Sky High Survival - tome 1</h2>
        	<ul>
 <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Sky high survival'AND Auteur.idPersonne=18;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong>" . $row["isbn"] ."</li>";
    echo "<li><strong>Type : </strong>" . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF : </strong>" . $row["annee"] ."</li>";
    echo "<li><strong>Scénariste : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Sky high survival' AND Auteur.idPersonne=19;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Dessinateur : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Sky high survival' AND Auteur.idPersonne=20;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Traducteur : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li><strong>Nombre de pages VF :</strong> " . $row["nbpages"] ."</li>";
    echo "<li><strong>Editeur VF :</strong> " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
        		<li><strong>Éditeur VO :</strong> Kodansha</li>
        		<li><strong>Prix :</strong> 7.45 € / 605 ¥</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Action - Ecchi - Horreur - Mature – Mystère</li>
        		<li><strong>Résumé :</strong><br> Yuri se retrouve mystérieusement sur le toit d'un gratte-ciel. Ne sachant pas ce qui lui arrive ni où elle se trouve, elle voit foncer sur elle un personnage masqué et armé. Elle l'évite grâce à son instinct de survie, mais elle découvre un monde étrange, urbain.
            La seule façon de se déplacer et d'éviter les assaillants est d'emprunter les ponts qui relient les toits des immeubles d'une ville qui ne ressemble pourtant pas à Tokyo. Qui sont ces hommes masqués qui semblent en vouloir à sa vie ? Où se trouve son frère ? Comment sortir de ce monde hostile… !?
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
