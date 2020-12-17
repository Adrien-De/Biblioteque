<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$autre = $_POST['autre'];
	$raison = $_POST['raison'];
	if (empty($name)) 
	{
		echo "Vous n'avez pas renseigné votre nom.";
	}
	else
	{
		echo 'Votre message a été correctement envoyé.
        <br/><br/>
        <form action="../index.php" method="post" name="Contact">
        <input type="submit" value="Retour">
        </form>';
	}

}
?>

