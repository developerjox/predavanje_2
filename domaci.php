<?php

$naslovSajta = "Postani Programer";
$navigacija = ["Glavna", "O nama", "Kontakt"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $naslovSajta ?></title>
</head>
<body>
  <h1><?= $naslovSajta ?></h1>
  <nav>
    <a href = "#"><?= $navigacija[0] ?></a>
    <a href = "#"><?= $navigacija[1] ?></a>
    <a href = "#"><?= $navigacija[2] ?></a>
  </nav>
</body>
</html>
