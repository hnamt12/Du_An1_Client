<?php
function giohangList(){
   $view = 'giohang/giohang';
   require_once('master.php');
}

function giohangAdd($id_sanpham) {
   if (!in_array($id_sanpham, $_SESSION["giohang"]))
      array_push($_SESSION["giohang"], $id_sanpham);

   $view = 'giohang/giohang' ; 
   require_once('master.php');
}

function giohangDelete($id_sanpham) {

}