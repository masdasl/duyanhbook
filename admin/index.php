<?php
session_start();
ob_start();
if(isset($_SESSION['role'])&&($_SESSION['role'] == 1)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=heade, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin-css/admin.css">
</head>
<body>
    <header>
        <h1>Admin -Website</h1>
        <div class="logout">
    <a href="index.php?ad=out"><img src="data:image/png;base64,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" alt=""></a>
</div>
    </header>
    <?php include("case.php") ?>
</body>
</html>
<?php 
}else{
    header('location:../index.php');
}
?>