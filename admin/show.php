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
     function show_donhang(){
        $conn =connectdb();
        $sql ="SELECT * FROM tbl_bill ";
        $stmt =  $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
         }
    function chitietdonhang($idbill){
            $conn =connectdb();
            $sql ="SELECT * FROM tbl_cart WHERE idbill=".$idbill;
            $stmt =  $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $kq = $stmt->fetchAll();
            return $kq;
             }
 ?>