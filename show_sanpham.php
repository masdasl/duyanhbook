<?php 
function show_sp(){
$conn =connectdb();
$sql ="SELECT * FROM book_items ";
$stmt =  $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$kq = $stmt->fetchAll();
return $kq;
 }
 function show_type($type){
    $conn =connectdb();
    $sql ="SELECT * FROM book_items WHERE book_type='$type' ";
    $stmt =  $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
     }
?>