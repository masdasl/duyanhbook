<?php
 include("../connection.php");
if((isset($_POST['them_admin']))&&($_POST['them_admin'])){  
    include("../admin/../dangky.php");
    $user = $_POST['user'];
    $password = $_POST['password'];
    dangky($user,$password,1);
    header('location:index.php?ad=use');
} 
?>
<div class="center">
    <form action="" method="post" class="add_form"> 
        <h2>Thêm ADMIN</h2>
        <input type="text" class="box" name="user" placeholder="nhập user admin" >
        <input type="text" class="box" name="password" placeholder="nhập pass admin" >
        <input type="submit" value="Thêm" name="them_admin" class="btn">
    </form>
    </div>
 