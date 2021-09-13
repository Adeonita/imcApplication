<?php
  require_once("./serverApplication.php");

  $height = $_POST["height"];
  $weight = $_POST["weight"];

  $serverApplication = new Imc();
  $imc = $serverApplication->getClassificationIMC($weight, $height);

  
  echo "<h1> $imc</h1>";
?>