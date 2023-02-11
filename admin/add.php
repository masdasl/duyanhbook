<?php 
    include("../connection.php"); 
    if((isset($_POST['them']))&&($_POST['them'])){   
    $book_name = $_POST['book_name']; 
    $book_price = $_POST['book_price']; 
    $book_type = $_POST['book_type']; 
    $book_image = $_POST['book_image']; 
        $conn = connectdb();
        $sql = "INSERT INTO book_items (book_name, book_price,book_type,book_image) VALUES ('$book_name', '$book_price','$book_type','$book_image')";
        $conn->exec($sql);
        header('location:index.php');
    }
?>
    <div class="center">
    <form action="" method="post" class="add_form"> 
        <h2>Thêm</h2>
        <input type="text" class="box" name="book_name" placeholder="nhập tên sản phẩm" >
        <input type="text" class="box" name="book_price" placeholder="nhập giá sản phẩm" >
        <input type="text" class="box" name="book_image" placeholder="nhập đường dẫn ảnh" >
        <select name="book_type"  class="box">
        <option value="economic">economic</option>
        <option value="English book">English book</option>
        <option value="Vietnamese book">Vietnamese book</option>
        <option value="psychology book">psychology book</option>
        <option value="sách giáo khoa">sách giáo khoa</option>
         </select>
        <input type="submit" value="Thêm" name="them" class="btn">
    </form>
    </div>
 
