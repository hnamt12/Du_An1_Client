<?php
function sanphamDetail(){
   $sanpham = getOneSanpham($_GET["id"]);
   $view = 'sanpham/detail';
   require_once('master.php');
}