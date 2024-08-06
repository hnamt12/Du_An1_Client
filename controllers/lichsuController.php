<?php 
function lichsuList(){
    $listDonhang = getAllDonhang_Taikhoan($_SESSION["user"]["id_taikhoan"]);
    $view = 'lichsu/list' ;
    require_once('master.php');
}

function lichsuDetail(){
    $donhang = getOneDonhang($_GET["id"]);
    $listCTDH = getAllChiTietDonHang($donhang["id_donhang"]);
    $view = 'lichsu/detail' ;
    require_once('master.php');
}