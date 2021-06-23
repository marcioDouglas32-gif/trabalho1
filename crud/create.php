<?php
$servername = "frwahxxknm9kwy6c.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "p0ikfg5byl9da62n";
$password = "l99vczrt1bkayb2r";
$dbname    = "jznz94d4b9izdizu";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO white (aluno, disciplina, nota1, nota2) 
  VALUES ('douglas ', 'portugues', '9','10')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "aluno cadastrado";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>