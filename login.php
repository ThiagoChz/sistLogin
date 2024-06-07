<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "controlcore");

  $result = $mysqli->query("SELECT * FROM cadastro");
  printf("Select retornou %d linhas.\n", $result.login);


echo "O valor de CAMPO 1 é: " . $_POST["login"];
echo "<br>O valor de CAMPO 2 é: " . $_POST["senha"];
?>