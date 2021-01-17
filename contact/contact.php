<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <title>図書館 - Toshokan</title>
    <link rel="shortcut icon" href="/biblio_groupe15_etape3/img/Logo2.0.png" type="image/png">
    <link href="stylecontact.css" rel="stylesheet" type="text/css">
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
    <form action="send_email.php" method="post">
    <p>
        <label for="civilite">Civilité :</label>
        <select id="civilite" name="civilite">
            <option value="mr" selected="selected">Monsieur</option>
            <option value="mme">Madame</option>
            <option value="mlle">Mademoiselle</option>
        </select>
    </p>
    <p>
        <label for="nom">Nom/Prénom :</label>
        <input type="text" id="nom" name="nom" />  
    </p>  
    <p>  
        <label for="email">E-mail :</label>  
        <input type="text" id="email" name="email" />  
    </p>
    <p>  
        <label for="sujet">Sujet :</label>  
        <input type="text" id="sujet" name="sujet" />  
    </p>  
    <p>  
        <label for="message">Message :</label>  
        <textarea id="message" name="message" cols="40" rows="4"></textarea>  
    </p>
    <p>
        <input type="submit" name="envoye" value="Envoyer" />
    </p> 
</form>
</main>
  </body>
</html>
