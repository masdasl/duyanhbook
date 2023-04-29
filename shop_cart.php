<?php
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang'] =[];
    if(isset($_POST['addcart']) && ($_POST['addcart'])){
        $hinh = $_POST['hinh'];
        $name = $_POST['name'];
        $gia = $_POST['gia'];
        $sp = [ $hinh,$name,$gia];
        $_SESSION['giohang'][]=$sp;
        header('location: index.php?page=home');
    }
    if(isset($_GET['delid'])){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }

?>
<div class="container mt-5 mb-5">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <div class="p-2">
                        <h4>Shopping cart</h4>
                    </div>
                    <form action="dathang.php" method="post">
                    <?php if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
                        $tong = 0;
                        for($i=0;$i < sizeof($_SESSION['giohang']);$i++){ 
                            $tt =  $_SESSION['giohang'][$i][2];
                            $tong+=$tt;
                            ?>
                    <div class="d-flex flex-row justify-content-between align-items-center p-2 bg-white mt-4 px-3 rounded">
                        <div class="mr-1"><img class="rounded" src="<?=$_SESSION['giohang'][$i][0]?>" width="70"></div>
                        <div class="d-flex flex-column align-items-center product-details"><span class="font-weight-bold"><?= $_SESSION['giohang'][$i][1]?></span>
                        </div>
                        <div class="d-flex flex-row align-items-center qty" ><i class=""></i>
                            <h5 class="text-grey mt-1 mr-1 ml-1"></h5><i class=""></i></div>
                        <div>
                            <h5 class="text-grey"><?= $_SESSION['giohang'][$i][2]?>.000</h5>
                        </div>
                        <a href="index.php?page=shop_cart&delid=<?=$i?>" class="d-flex align-items-center"><i class="fa fa-trash mb-1 text-danger"></i></a>
                    </div>
                    <?php }}?>
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input type="text" name="diachi" class="form-control border-0 gift-card" placeholder="Nhap dia chi">
                    <div class="d-flex flex-row align-items-center mt-3 p-2 bg-white rounded"><input class="btn btn-warning btn-block btn-lg ml-2 pay-button" type="submit" name="dathang" value="Proceed to Pay"></div>
                    <input type="hidden" name="tongdonhang" class="form-control border-0 gift-card" value="<?= $tong?>">>
                    </form>
                    <div class="order_total">
                         <div class="order_total_content text-md-right">
                             <div class="order_total_title">Order Total:</div>
                             <input class="order_total_amount"><?= $tong?>.000</input>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        