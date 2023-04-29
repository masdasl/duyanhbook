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
                $datas = show_sp();
                  foreach($datas as $row){ ?>
                <div class="product">
                    <div class="img">
                        <img src="<?=$row['book_image']?>" alt="">
                    </div>
                    <div class="title center"><?=$row['book_name']?></div>
                    <div class="price center"><?=$row['book_price']?>.000đ </div>
                    <a href="index.php?ad=add" class="center">Thêm</a>
                    <a href="" class="center">Sửa</a>
                    <a href="index.php?ad=del&id=<?=$row['id_books']?>" class="center">Xóa</a>
                </div>
                <?php }?>
            </form>
        </div>
    </main>