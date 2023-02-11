<main>
        <div class="nav">
        <a class="center" href="index.php">Sản phẩm</a>
        <a class="center" href="index.php?ad=use">người dùng</a>
        </div>
        <div class="form-content">
            <form action="" class="admin-form">
                <?php 
                include("show.php");
                $datas = show_tk();
                  foreach($datas as $row){ ?>
                <div class="product">
                    <div class="center" style="color:whitesmoke;font-size:1.4rem;border-right: .2rem solid black ;">
                        <?=$row['role']==1 ? 'admin': 'user'?>
                    </div>
                    <div class="text center"><?=$row['user']?></div>
                    <div class="text center"><?=$row['password']?> </div>
                    <a href="index.php?ad=add_user" class="center">Thêm</a>
                    <a href="" class="center">Sửa</a>
                    <a href="index.php?ad=del_use&id_user=<?=$row['id_user']?>" class="center">Xóa</a>
                </div>
                <?php }?>
            </form>
        </div>
    </main>