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

    <title>Darling in the FRANXX</title>
    <link rel="shortcut icon" href="../Logo2.0.png" type="image/png">
    <link href="stylepage.css" rel="stylesheet" type="text/css">
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
      
        <img class="image" src="../img/Darling.jpg" alt="Darling in the FRANXX image"/>
        <div class="text">
        	<h2 class="Bl">Darling in the FRANXX - tome 1</h2>
        	<ul>
            <li><strong>PAS SORTIE EN FRANCE</strong></li>
            <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Darling in the Franxx'AND Auteur.idPersonne=10;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong>" . $row["isbn"] ."</li>";
    echo "<li><strong>Type : </strong>" . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution : </strong>" . $row["annee"] ."</li>";
    echo "<li><strong>Scénariste :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Darling in the Franxx' AND Auteur.idPersonne=11;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Dessinateur : </strong>" . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>";
    echo "<li><strong>Editeur : </strong>" . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
        		<li><strong>Prix :</strong> 702 ¥</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Action - Ecchi - Romance - Science-fiction</li>
        		<li><strong>Résumé :</strong><br> Hiro (Code:016) est un jeune pilote vivant à Mistilteinn, un quartier se trouvant sur Plantation, une ville fortifiée mobile où s'est retranchée la population après que la surface de la Terre fut réduite en ruines.
Dans ce quartier, les jeunes sont formés à piloter les Franxx, des robots contrôlés par duo afin de combattre les Kyōryū, de mystérieuses créatures mécaniques géantes.
Malheureusement, Hiro ne s'accorde pas avec sa partenaire et échoue à devenir pilote, destiné ainsi à tomber dans l'oubli.
Mais il fait alors la connaissance de Zero Two, une étrange jeune fille possédant des cornes, et qui souhaite faire de Hiro son coéquipier. Hiro (Code:016) est un jeune pilote vivant à Mistilteinn, un quartier se trouvant sur Plantation, une ville fortifiée mobile où s'est retranchée la population après que la surface de la Terre fut réduite en ruines.
Dans ce quartier, les jeunes sont formés à piloter les Franxx, des robots contrôlés par duo afin de combattre les Kyōryū, de mystérieuses créatures mécaniques géantes.
Malheureusement, Hiro ne s'accorde pas avec sa partenaire et échoue à devenir pilote, destiné ainsi à tomber dans l'oubli.
Mais il fait alors la connaissance de Zero Two, une étrange jeune fille possédant des cornes, et qui souhaite faire de Hiro son coéquipier.</li>
        	</ul>
        </div>
      </div>
      </article>
             <?php require "../aside.php"; ?>

    </main>
    <?php mysqli_close($link); ?> 
  </body>
</html>
