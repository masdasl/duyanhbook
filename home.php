<!DOCTYPE html>
    <section class="home">
        <div class="banner">
            <img src="https://www.bookswagon.com/images/promotionimages/web/1_alltimefavourite.jpg?v=1.4" alt="">
        </div>
        <div class="swiper book-slider">
            <div class="swiper-wrapper">
            <a href="" class="swiper-slide" ><img src="https://d2g9wbak88g7ch.cloudfront.net/bannerimages/80_inr.jpg" alt=""></a>
            <a href="" class="swiper-slide"><img src="https://d2g9wbak88g7ch.cloudfront.net/bannerimages/79_inr.jpg" alt=""></a>
            <a href="" class="swiper-slide"><img src="https://d2g9wbak88g7ch.cloudfront.net/bannerimages/82_inr.jpg" alt=""></a>
            <a href="" class="swiper-slide"><img src="https://d2g9wbak88g7ch.cloudfront.net/bannerimages/83_inr.jpg" alt=""></a>
            <a href="" class="swiper-slide"><img src="https://d2g9wbak88g7ch.cloudfront.net/bannerimages/84_inr.jpg" alt=""></a>
            <a href="" class="swiper-slide"><img src="https://d2g9wbak88g7ch.cloudfront.net/bannerimages/81_inr.jpg" alt=""></a>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="icons-container">
            <div class="icons">
                <i class="fa-solid fa-plane"></i>
                <div class="content">
                    <h3>miễn phí vận chuyển </h3>
                    <p> trị giá hơn 100,000 đồng</p>
                </div>
            </div>
            <div class="icons">
                <i class="fa-solid fa-lock"></i>
                <div class="content">
                    <h3>Thanh toán an toàn </h3>
                    <p> 100% Thanh toán an toàn</p>
                </div>
            </div>
            <div class="icons">
                <i class="fa-solid fa-truck-fast"></i>
                <div class="content">
                    <h3> dễ dàng nhận hàng </h3>
                    <p> trong 3 ngày</p>
                </div>
            </div>
            <div class="icons">
                <i class="fa-solid fa-phone"></i>
                <div class="content">
                    <h3> hỗ trợ 24/7 </h3>
                    <p>trung tâm hỗ trợ online</p>
                </div>
            </div>
        </div>
        <!--form product-->
        <div  class="product-container">
           <div class="list">
           <?php 
              include("show_sanpham.php");
              $datas = show_sp();
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
        setLimit(3);
        loadProduct(limit);
       </script>