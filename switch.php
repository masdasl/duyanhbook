<?php
if(isset($_GET['page'])) {
    switch($_GET['page']){
        case 'home':
            include("home.php");break;
        case 'economic':
            include("economic.php");break;
        case 'TV':
            include("TV.php");break;
        case 'TA':
            include("TA.php");break;
        case 'TLH':
            include("TLH.php");break;
        case 'SGK':
            include("SGK.php");break;
        default:
            include("home.php");
    }
}else{
    include("home.php");
}

?>