
<section class="home">
        <!--form product-->
        <div  class="product-container">
           <div class="list border">
           <?php 
              include("show_sanpham.php");
              $datas = show_type('sách giáo khoa ');
                foreach($datas as $row){ ?>
            <form action="index.php?page=shop_cart" method="post"  class="product" id="product">
            <div class="img">
                <img src="<?=$row['book_image']?>" alt="">
            </div>
            <h3 class="title"><?=$row['book_name']?></h3>
            <div class="price"><?=$row['book_price']?>.000đ </div>
            <input type="hidden" name="hinh" value="<?=$row['book_image']?>">
            <input type="hidden" name="name" value="<?=$row['book_name']?>">
            <input type="hidden" name="gia" value="<?=$row['book_price']?>">
            <input class="btn" type="submit" name="addcart" value="đặt hàng"></input>
            </form>
            <?php }?>
           </div>
        </div>
        <ul class="list-page">

        </ul>
       </section>
       <script src="js/load_product.js"></script>
       <script>
        setLimit(9);
        loadProduct(limit);
       </script>