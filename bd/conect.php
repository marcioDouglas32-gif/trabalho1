<?php


$servername = "frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "p0ikfg5byl9da62n";
$password = "l99vczrt1bkayb2r";
$dbname    = "jznz94d4b9izdizu";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "conectado com sucesso";
} catch(PDOException $e) {
  echo "Não foi possivel se conectar : " . $e->getMessage();
}
?>