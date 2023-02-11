
    <section class="home">
        </div>
        <!--form product-->
        <div  class="product-container ">
            <form action="" class="product-form border" id="product-form">
              <div class="list">
              <?php 
              include("show_sanpham.php");
              $datas = show_type('economic ');
                foreach($datas as $row){ ?>
                <div class="product">
                    <div class="img">
                        <img src="<?=$row['book_image']?>" alt="">
                    </div>
                    <h3 class="title"><?=$row['book_name']?></h3>
                    <div class="price"><?=$row['book_price']?>.000đ </div>
                </div>
                <?php }?>
              </div>
                <ul class="list-page">

                </ul>
            </form>
        </div>
       </section>
       <script src="js/load_product.js"></script>
       <script>
        setLimit(9);
        loadProduct(limit);
       </script>