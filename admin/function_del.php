<?php
 include("../connection.php");
function del($id){
    $conn = connectdb();
    $sql ="DELETE  FROM book_items WHERE id_books=".$id;
    $conn->exec($sql);
}
function del_use($id_user){
    $conn = connectdb();
    $sql ="DELETE  FROM tbl_user WHERE id_user=".$id_user;
    $conn->exec($sql);
}
?>