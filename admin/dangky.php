<?php
function dangky($user,$password,$role){
    $conn =connectdb();
    $sql ="INSERT INTO tbl_user (user,password,role) VALUES ('$user','$password','$role') ";
    $conn->exec($sql);
}
?>