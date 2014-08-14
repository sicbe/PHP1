<?php 

/**
 * Hello world
 * -----------
 * 
 * 1. Print vanuit PHP de zin "Hello world!" af naar de HTML pagina.
 * 
 * 2. Plaats deze zin in een variabele bovenaan de pagina en druk deze af in de HTML pagina.
 * 
 */

$mijn_tekst = "<p>Dit is mijn tekst</p>";

?><!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mijn eerste PHP bestand</title>
</head>
<body>
  <?php 

  // 1. Oplossing hieronder
  print "<p>Hello world!</p>";

  // 2. Oplossing hieronder
  print $mijn_tekst;
  
   ?>
</body>
</html>