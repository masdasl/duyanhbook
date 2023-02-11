<?php 
 include("../connection.php");
function show_sp(){
$conn =connectdb();
$sql ="SELECT * FROM book_items ";
$stmt =  $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$kq = $stmt->fetchAll();
return $kq;
 }
 function show_tk(){
    $conn =connectdb();
    $sql ="SELECT * FROM tbl_user ";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
     }
 ?>