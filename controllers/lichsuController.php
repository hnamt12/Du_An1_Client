<?php 
function lichsuList(){
    $listDonhang = getAllDonhang_Taikhoan($_SESSION["user"]["id_taikhoan"]);
    $view = 'lichsu/list' ;
    require_once('master.php');
}