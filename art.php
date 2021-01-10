

<?php $req = "SELECT Livre.titre,Livre.isbn,Genre.libelle AS genre,Livre.annee,Editeur.libelle AS editeur,Personne.prenom AS prenom, Personne.nom AS nom, Role.libelle AS role
 FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id GROUP BY Livre.isbn, Personne.nom, Personne.prenom, Role.libelle; ORDER BY titre;";?>

<div class="container">
              <?php $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";

   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

echo '<div class="boxg" style="cursor: pointer;" onclick="window.location="pages/'.$row["isbn"].'.php";">';
echo '<div class="imgBox">';
echo '<img src="img/'.$row["isbn"].'.jpg" alt="Couverture du manga">';
echo '</div>';
echo '<div class="details">';
echo '<div class="content">';
echo '<div id='.$row["isbn"].'>';
echo "<ul>";
echo "<h3>". $row["titre"] ."</h3>";
echo "<li>Code ISBN: " . $row["isbn"] ."</li>";
echo "<li>Type: " . $row["genre"] ."</li>";
echo "<li>Année: " . $row["annee"] ."</li>";
echo "<li>".$row["role"]. " : " . $row["nom"] ." ". $row["prenom"] ."</li>";
echo "</ul>";
echo "</div>";
echo "</div>";
echo "</div>";
echo "</div>";
}mysqli_free_result($result);}?>
   
        </div>