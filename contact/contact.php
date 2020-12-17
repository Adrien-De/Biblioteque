<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>図書館 - Toshokan</title>
    <link rel="shortcut icon" href="../Logo2.0.png" type="image/png">
    <link href="stylecontact.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="stylecontact.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
        <img class="logo" src="../Logo2.0.png" alt="Image" />
        <h1>図書館<br>Toshokan</h1>
        <nav>
          <ul>
            <li><a href="../index.php"><strong>ACCUEIL</strong></a></li>
            <li class="deroulant"><a href="#"><strong>GENRES</strong></a>
              <ul class="sous">
                <li><a href="../genres/action.php"><strong>Action</strong></a></li>
                <li><a href="../genres/aventure.php"><strong>Aventure</strong></a></li>
                <li><a href="../genres/comedie.php"><strong>Comédie</strong></a></li>
                <li><a href="../genres/drama.php"><strong>Drama</strong></a></li>
                <li><a href="../genres/fantastique.php"><strong>Fantastique</strong></a></li>
                <li><a href="../genres/fantasy.php"><strong>Fantasy</strong></a></li>
                <li><a href="../genres/horreur.php"><strong>Horreur</strong></a></li>
                <li><a href="../genres/mature.php"><strong>Mature</strong></a></li>
                <li><a href="../genres/psychologique.php"><strong>Psychologique</strong></a></li>
                <li><a href="../genres/romance.php"><strong>Romance</strong></a></li>
                <li><a href="../genres/school_life.php"><strong>School life</strong></a></li>
                <li><a href="../genres/sf.php"><strong>S.F</strong></a></li>
                <li><a href="../genres/slice_life.php"><strong>Slice of life</strong></a></li>
                <li><a href="../genres/surnaturel.php"><strong>Surnaturel</strong></a></li>
              </ul> 
            </li>
            <li><a href="../equipe/equipe.php"><strong>EQUIPE</strong></a></li>
            <li><a href="contact/contact.php"><strong>CONTACT</strong></a></li>
          </ul>
     </nav>
    </header>
    
  <body>
    <main class="container">
        <h2>Contact</h2>
    <form method="post" action="receive.php">
      	<fieldset>
            <legend>Formulaire à remplir :</legend>
    	<label for="name">Nom :</label>
    	<input type="text" id="name" name="name" autofocus required><br>

    	<label for="mail">Adresse e-mail :</label>
    	<input type="email" id="mail" name="mail" required><br>

    	<label for="raison" required>Raison du contact :</label>
    	<select>
    		<option value="1">Je ne vois pas les images</option>
    		<option value="2"selected>Il y a une page inaccessible</option>
    		<option value="3">Les informations ne sont pas visibles</option>
            <option value="4">Quand sera la prochaine mise à jour</option>
            <option value="5">Information incorrect</option>
    	</select><br>
    	

        <label for="autre">Autres :</label><br>
    	<textarea cols="40" rows="5" id="autre" name="autre" placeholder="Une autre raison"></textarea><br>

        <button type="reset">Tout effacer</button>
    	<button type="submit">Valider</button>
   </fieldset> </form>
</main>
  </body>
</html>