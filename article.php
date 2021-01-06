      <div class="container">
        <div class="boxb" style="cursor: pointer;" onclick="window.location='pages/9780316376730.php';">
          <div class="imgBox">
            <img src="img/AccelWorld.jpg" alt="AccelWorld image">
          </div>
          <div class="details">
            <div class="content">
              <h3>Accel World</h3>
              <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Accel World'AND Auteur.idPersonne=1;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN: " . $row["isbn"] ."</li>";
    echo "<li>Type: " . $row["libelle"] ."</li>";
    echo "<li>Année: " . $row["annee"] ."</li>";
    echo "<li>Scénariste: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Accel World'AND Auteur.idPersonne=2;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Dessinateur: " . $row["nom"] ." ". $row["prenom"] ."</li>";
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : ASCII Media Works</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Aventure - Comédie – Fantastique</li></ul>
            </div>
          </div> 
        </div>

        <div class="boxg" style="cursor: pointer;" onclick="window.location='pages/9782505008262.php';">
          <div class="imgBox">
            <img src="img/Bakuman.jpg" alt="Bakuman image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Bakuman</h3>
            <ul>
 <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bakuman'AND Auteur.idPersonne=3;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN: " . $row["isbn"] ."</li>";
    echo "<li>Type: " . $row["libelle"] ."</li>";
    echo "<li>Année: " . $row["annee"] ."</li>";
    echo "<li>Scénariste: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Bakuman' AND Auteur.idPersonne=4;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Dessinateur: " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bakuman' AND Auteur.idPersonne=5;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Traducteur: " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
 <li>Éditeur VO : Shueisha</li>
 <li>Illustrations : N&B</li>
<li>Genres : Comédie - Slice of Life</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxb" style="cursor: pointer;" onclick="window.location='pages/9791032703793.php';">
          <div class="imgBox">
            <img src="img/Beastars.jpg" alt="Beastars image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Beastars</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Beastars'AND Auteur.idPersonne=6;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Auteur: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>

<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Beastars' AND Auteur.idPersonne=7;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Traducteur: " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>            
 <li>Éditeur VO : Akita Shoten</li>
 <li>Auteur : Itagaki Paru</li>
 <li>Genres : Action - Comédie - Drame - Mature - Psychologique - Romance - School Life - Slice of Life</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxg" style="cursor: pointer;" onclick="window.location='pages/9782723442275.php';">
          <div class="imgBox">
            <img src="img/Bleach.jpg" alt="Bleach image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Bleach</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bleach'AND Auteur.idPersonne=8;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Auteur: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Livre JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Bleach';";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo "<li>Editeur VF: " . $row["libelle"] ."</li>";
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Shueisha</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Aventure - Comédie - Drame – Fantastique</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxb" style="cursor: pointer;" onclick="window.location='pages/9782723455848.php';">
          <div class="imgBox">
            <img src="img/D.Gray-Man.jpg" alt="D.Gray-Man image">
          </div>
          <div class="details">
            <div class="content">
            <h3>D.Gray-Man</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='D.Gray-Man'AND Auteur.idPersonne=9;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Auteur: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Livre JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='D.Gray-Man';";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo "<li>Editeur VF: " . $row["libelle"] ."</li>";
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Shueisha</li>
<li>Illustrations : N&B</li>
<li>Genres : Aventure - Comédie - Horreur – Surnaturel</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxg" style="cursor: pointer;" onclick="window.location='pages/darling.php';">
          <div class="imgBox">
            <img src="img/Darling.jpg" alt="Darling image">
          </div>
          <div class="details">
            <div class="content">
            <h3>DARLING IN THE FRANXX </h3>
            <p>Il n'est pas disponible en France pour le moment.</p>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Darling in the Franxx'AND Auteur.idPersonne=10;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Scénariste : " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Darling in the Franxx' AND Auteur.idPersonne=11;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Dessinateur : " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur : " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li>Illustrations : N&B</li>
<li>Genres : Action - Ecchi - Romance - Science-fiction</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxb" style="cursor: pointer;" onclick="window.location='pages/9782752300553.php';">
          <div class="imgBox">
            <img src="img/Excel_Saga.png" alt="Excel Saga image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Execel Saga</h3>
            <ul>
 <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Excel Saga'AND Auteur.idPersonne=12;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Auteur: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Livre JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Excel Saga';";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo "<li>Editeur VF: " . $row["libelle"] ."</li>";
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Shonen Gahosha</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Comédie - Drame - Science-fiction</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxg" style="cursor: pointer;" onclick="window.location='pages/9782820316585.php';">
          <div class="imgBox">
            <img src="img/Haikyu.jpg" alt="Haikyu image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Haikyuu!</h3>
            <ul>
 <?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Haikyuu'AND Auteur.idPersonne=13;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Auteur: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Livre JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Haikyuu';";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
   echo "<li>Editeur VF: " . $row["libelle"] ."</li>";
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Shueisha</li>
<li>Illustrations : N&B</li>
<li>Genres : Comédie - Drame - School Life</li>
            </ul>
            </div>
          </div>
        </div>

        <div class="boxb" style="cursor: pointer;" onclick="window.location='pages/9782375060247.php';">
          <div class="imgBox">
            <img src="img/Overlord.jpg" alt="Overlord">
          </div>
          <div class="details">
            <div class="content">
            <h3>Overlord</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Overlord'AND Auteur.idPersonne=14;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Scénariste: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Overlord' AND Auteur.idPersonne=15;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Dessinateur: " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Overlord' AND Auteur.idPersonne=16;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Auteur : " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Overlord' AND Auteur.idPersonne=17;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Chara-designer : " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Kadokawa Shoten</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Aventure - Drame - Fantastique - Science-fiction</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxg" style="cursor: pointer;" onclick="window.location='pages/9782505066903.php';">
          <div class="imgBox">
            <img src="img/Sky_high_survival.jpg" alt="Sky_high_survival image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Sky High Survival</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Sky high survival'AND Auteur.idPersonne=18;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Scénariste: " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Sky high survival' AND Auteur.idPersonne=19;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Dessinateur: " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Sky high survival' AND Auteur.idPersonne=20;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Traducteur : " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Kodansha</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Ecchi - Horreur - Mature – Mystère</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxb" style="cursor: pointer;" onclick="window.location='pages/9782351420553.php';">
          <div class="imgBox">
            <img src="img/Soul_Eater.jpg" alt="Soul_Eater image">
          </div>
          <div class="details">
            <div class="content">
            <h3>Soul Eater</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Soul eater'AND Auteur.idPersonne=21;";
   $result = mysqli_query($link,$req);
               if ($result) {
   //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Auteur : " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='Soul eater' AND Auteur.idPersonne=22;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Traducteur : " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='Soul eater' AND Auteur.idPersonne=23;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Traducteur : " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Square Enix</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Aventure - Comédie – Fantastique</li>
            </ul>
            </div>
          </div> 
        </div>

        <div class="boxg" style="cursor: pointer;" onclick="window.location='pages/9782818936238.php';">
          <div class="imgBox">
            <img src="img/TatenoYuusha.jpg" alt="TatenoYuusha image">
          </div>
          <div class="details">
            <div class="content">
            <h3>The Rising Shield Hero</h3>
            <ul>
<?php $req = "SELECT Genre.libelle,Livre.annee,nom,prenom,isbn FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='The Rising shield hero'AND Auteur.idPersonne=24;";
   $result = mysqli_query($link,$req);
               if ($result) {
      //echo "SELECT a retourné ".mysqli_num_rows($result)." lignes.<br>";
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Code ISBN : " . $row["isbn"] ."</li>";
    echo "<li>Type : " . $row["libelle"] ."</li>";
    echo "<li>Année : " . $row["annee"] ."</li>";
    echo "<li>Scénariste : " . $row["nom"] ." ". $row["prenom"] ."</li>";
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn WHERE Livre.titre ='The Rising shield hero' AND Auteur.idPersonne=25;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Dessinateur : " . $row["nom"] ." ". $row["prenom"] ."</li>";     
}
   mysqli_free_result($result);
}?>
<?php $req = "SELECT * FROM Auteur JOIN Personne ON Auteur.idPersonne = Personne.id JOIN Role ON Auteur.idRole=Role.id JOIN Livre ON Auteur.idLivre = Livre.isbn JOIN Genre ON Livre.genre = Genre.id JOIN Editeur ON Livre.editeur=Editeur.id WHERE Livre.titre ='The Rising shield hero' AND Auteur.idPersonne=26;";
   $result = mysqli_query($link,$req);
               if ($result) {
   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<li>Chara-designer : " . $row["nom"] ." ". $row["prenom"] ."</li>"; 
    echo "<li>Editeur VF: " . $row["libelle"] ."</li>";  
}
   mysqli_free_result($result);
}?>
<li>Éditeur VO : Media Factory</li>
<li>Illustrations : N&B</li>
<li>Genres : Action - Aventure - Drame – Fantasy</li>
            </ul>
            </div>
          </div> 
        </div>
      </div>