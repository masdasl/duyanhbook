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
                $datas = show_donhang();
                  foreach($datas as $row){ ?>
               <div class="product">
                    <div class="center" style="color:whitesmoke;font-size:1.4rem;border-right: .2rem solid black ;">
                        <?=$row['id_bill']?>
                    </div>
                    <div class="text center"><?=$row['diachi']?></div>
                    <div class="text center"><?=$row['total']?>.000</div>
                    <a href="index.php?ad=chitietbill&idbill=<?=$row['id_bill']?>" class="center">Chitiet</a>
                    <a href="index.php?ad=del_bill&id_bill=<?=$row['id_bill']?>" class="center">Chốt đơn</a>
                </div>
                <?php }?>
            </form>
        </div>
    </main>