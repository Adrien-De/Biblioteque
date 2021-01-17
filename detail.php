<!DOCTYPE html>
<html>
  <head>
          <?php
     $link = mysqli_connect("localhost", "root", "root", "bibliogroupe15");
  //if(!$link){echo "Erreur : Impossible de se connecter à MySQL." . PHP_EOL;echo "Errno de débogage : " . mysqli_connect_errno() . PHP_EOL;echo "Erreur de débogage : " . mysqli_connect_error() . PHP_EOL; exit; }
    
  //echo "Succès : Une connexion correcte à MySQL a été faite! La base de donnée bibliothèque a été ouverte." . PHP_EOL;
  //echo "Information d'hôte : " . mysqli_get_host_info($link) . PHP_EOL;
   //var_dump($result);?>
    <meta charset="utf-8">

    <title>Toshokan</title>
    <link rel="shortcut icon" href="Logo2.0.png" type="image/png">
    <link href="pages/stylepage.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>
  <header>
  <?php require "header.php"; ?>
  </header>
    <main>
      <article class="bodyy">
        <?php 
        if (isset($_GET['isbn'])) {

        $req = "SELECT GROUP_CONCAT(Role.libelle,' : ',Personne.nom,' ',Personne.prenom SEPARATOR  '; ' ) AS role, Livre.titre,Livre.isbn,Genre.libelle AS genre,Livre.annee,Editeur.libelle AS editeur,Livre.nbpages FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE isbn = ".$_GET['isbn'].";";

           $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";

   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
echo '<div class="content">';
echo '<img class="image" src="img/'.$_GET['isbn'].'.jpg" alt="Couverture du manga">';
echo '<div class="text">';
echo "<h2>". $row["titre"] ."</h2>";
echo '<div id="'.$_GET['isbn'].'">';
echo "<ul>";
echo "<li>Code ISBN: " . $_GET['isbn'] ."</li>";
echo "<li>Type: " . $row["genre"] ."</li>";
echo "<li>Année: " . $row["annee"] ."</li>";
echo "<li>Nombre de pages: " . $row["nbpages"] ." pages</li>";
echo "<li>".$row["role"]."</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}mysqli_free_result($result);}
else {
    Echo "oups... petit problème...";
}
}
?>
   
      
    </article>
    <?php require "aside.php"; ?>
    </main>
    <?php mysqli_close($link); ?> 
  </body>
</html>
