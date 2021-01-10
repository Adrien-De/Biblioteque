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

    <title>Toshokan</title>
    <link rel="shortcut icon" href="Logo2.0.png" type="image/png">
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
  </head>
  <header>
	<?php require "header.php"; ?>
  </header>
    <main>
      <article class="bodyy">
        <?php require "art.php"; ?>
	  </article>
	  <?php require "aside.php"; ?>
    </main>
    <?php mysqli_close($link); ?> 
  </body>
</html>
