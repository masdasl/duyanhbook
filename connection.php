<?php
function connectdb(){
$servername = "localhost";
$dbname ="book";
$username = "root";
$password = "";
try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname; charset=utf8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
return $conn;
}
?>