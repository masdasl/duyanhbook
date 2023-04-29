<?php
if(isset($_GET['ad'])) {
    switch($_GET['ad']){
        case 'del':
            include("function_del.php");
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                del($id);
                header('location: index.php');
            }
            break;
            case 'del_use':
                include("function_del.php");
                if(isset($_GET['id_user'])){
                    $id_user = $_GET['id_user'];
                    del_use($id_user);
                    header('location: index.php?ad=use');
                }
                break;
            case 'del_bill':
                include("function_del.php");
                if(isset($_GET['id_bill'])){
                    $id_bill = $_GET['id_bill'];
                    delbill($id_bill);
                    header('location: index.php?ad=bill');
                }
                break;
        case 'use':
            include("user.php");
            break;
        case 'bill':
            include("bill.php");
            break;
        case 'chitietbill':
            include("chitietbill.php");
            break;
        case 'add':
            include("add.php");
            break;
            case 'add_user':
                include("add_user.php");
                break;
        case 'out':
            if(isset($_SESSION['role'])){
                unset($_SESSION['role']);
                header('location: ../index.php');
            }
        default:
            include("sanpham.php");
    }
}else{
    include("sanpham.php");
}

?>