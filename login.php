<?php 
include("connection.php");

function login($user,$password){
$conn =connectdb();
$sql ="SELECT * FROM tbl_user WHERE user='".$user."' AND password='".$password."' ";
$stmt =  $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$kq = $stmt->fetchAll();
if(count($kq) > 0)return $kq[0]['role'];
else  return 0;
}
?>