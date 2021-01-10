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

    <title>Beastars</title>
    <link rel="shortcut icon" href="/biblio_groupe15_etape4/Logo2.0.png" type="image/png">
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
      
        <img class="image" src="../img/Beastars.jpg" alt="Beastars image"/>
        <div class="text">
        	<h2 class="Bl">Beastars - tome 1</h2>
        	<ul>
            <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Beastars'AND Auteur.idPersonne=6;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Code ISBN : </strong>" . $row["isbn"] ."</li>";
    echo "<li><strong>Type :</strong> " . $row["libelle"] ."</li>";
    echo "<li><strong>Année de parution VF :</strong> " . $row["annee"] ."</li>";
    echo "<li><strong>Auteur :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>

<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Beastars' AND Auteur.idPersonne=7;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li><strong>Traducteur :</strong> " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li><strong>Nombre de pages :</strong> " . $row["nbpages"] ."</li>";
    echo "<li><strong>Editeur VF :</strong> " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>            
        		<li><strong>Éditeur VO :</strong> Akita Shoten</li>
        		<li><strong>Prix :</strong> 6.90 € / 463 ¥</li>
        		<li><strong>Illustrations :</strong> N&B</li>
        		<li><strong>Genres :</strong> Action - Comédie - Drame - Mature - Psychologique - Romance - School Life - Slice of Life</li>
        		<li><strong>Résumé :</strong><br> À l'institut Cherryton, herbivores et carnivores vivent dans une harmonie orchestrée en détail. La consommation de viande est strictement interdite, et les dortoirs sont séparés en fonction des régimes alimentaires. Tout pourrait aller pour le mieux dans le meilleur des mondes… mais la culture ne peut étouffer tous les instincts. Quand le cadavre de l'alpaga Tem est retrouvé déchiqueté sur le campus, les méfiances ancestrales refont surface !
Legosi est la cible de toutes les suspicions. Parce qu'il était proche de Tem, parce qu'il est une des dernières personnes à avoir été vues en sa compagnie, et surtout… parce que c'est un loup. Pourtant, sensible et timide, il fait son possible pour réprimer ses instincts. Hélas, ses efforts sont vains face au vent de discrimination qui souffle sur le pensionnat…
Le seul qui pourra apaiser ce climat de terreur est le Beastar, le leader de l'école. Pour l'heure, les candidats se préparent, les élections approchent... Le favori n'est autre que le cerf Louis, étoile incontestée du club de théâtre auquel appartient Legosi. Bien décidé à remettre les carnivores à leur place, il fait mine de ne pas craindre les crocs acérés du loup gris. Mais peut-être serait-il mieux avisé de ne pas le sous-estimer !</li>
        	</ul>
        </div>
      </div>
      </article>
          <?php require "../aside.php"; ?>
      
    </main>
     <?php mysqli_close($link); ?> 
  </body>
</html>
