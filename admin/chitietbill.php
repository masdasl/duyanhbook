<main>
        <div class="nav">
        <a class="center" href="index.php">Sản phẩm</a>
        <a class="center" href="index.php?ad=use">người dùng</a>
        <a class="center" href="index.php?ad=bill">Bill</a>
        </div>
        <div class="form-content">
            <form action="" class="admin-form">
                <?php 
                include("show.php");
                $idbill = $_GET['idbill'];
                $datas =  chitietdonhang($idbill);
                  foreach($datas as $row){ ?>
               <div class="product">
                    <div class="center" style="color:whitesmoke;font-size:1.4rem;border-right: .2rem solid black ;">
                        Đây là bill số:<?=$row['idbill']?>
                    </div>
                    <div class="text center"><?=$row['tensach']?></div>
                    <div class="text center"><?=$row['dongia']?>.000 </div>
                </div>
                <?php }?>
            </form>
        </div>
    </main>