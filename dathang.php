<?php 
include("connection.php");
session_start();
function tongdonhang(){
    $tong = 0;
    for($i=0;$i < sizeof($_SESSION['giohang']);$i++){ 
        $tt =  $_SESSION['giohang'][$i][2];
        $tong+=$tt;
    }
    return $tong;
}
if(isset($_POST['dathang']) &&($_POST['dathang'])){
    $diachi = $_POST['diachi'];
    $pttt = 0;
    $total = tongdonhang();
    $idbill	= taodonhang($diachi,$total,$pttt);
 }
function taodonhang($diachi,$total,$pttt){
    $conn =connectdb();
    $sql ="INSERT INTO tbl_bill (diachi,total,pttt) VALUES ('$diachi','$total','$pttt') ";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn=null;
    return $last_id;
}
function taogiohang($tensp,$dongia,$idbill	){
    $conn =connectdb();
    $sql ="INSERT INTO tbl_cart (tensach,dongia,idbill	) VALUES ('$tensp','$dongia','$idbill') ";
    $conn->exec($sql);
    $conn = null;
}
for($i=0;$i < sizeof($_SESSION['giohang']);$i++){ 
    $tensp = $_SESSION['giohang'][$i][1];
    $dongia = $_SESSION['giohang'][$i][2];
    taogiohang($tensp,$dongia,$idbill);
}
    unset($_SESSION['giohang']);
    header('location:admin/index.php');
?>