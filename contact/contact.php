<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>図書館 - Toshokan</title>
    <link rel="shortcut icon" href="/biblio_groupe15_etape3/img/Logo2.0.png" type="image/png">
    <link href="stylecontact.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="stylecontact.css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>

    <header>
       <?php require "../header.php"; ?>
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
