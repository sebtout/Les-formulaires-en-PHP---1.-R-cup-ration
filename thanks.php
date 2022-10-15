<?php
$name = $_POST['firstName'];
$lastName = $_POST['lastName'];
$select = $_POST['liste'];
$mail = $_POST['courriel'];
$tel = $_POST['num'];
$message = $_POST['message'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <p>Merci, <?php echo ($name) . ' ' . ($lastName) ?> de nous avoir contacté à propos de <?php echo ($select) ?>.</p>
    <p>Un de nos conseillers vous contactera soit à l’adresse <?php echo ($mail) ?> ou par téléphone au <?php echo ($tel) ?> dans les plus brefs délais pour traiter votre demande : <?php echo ($message) ?></p>
  </div>
</body>
</html>


<!-- Merci {Prénom} {Nom} de nous avoir contacté à propos de “{sujet}”.

Un de nos conseillers vous contactera soit à l’adresse {e-mail} ou par téléphone au {téléphone} dans les plus brefs délais pour traiter votre demande : 

{message} -->