<?php
function showAllProducts(){
   $view = '/layouts/products/showAll' ; 
   require_once PATH_VIEW . 'layouts/master.php';
}
function showDetail(){
    $view = '/layouts/products/detail' ; 
    require_once PATH_VIEW . 'layouts/master.php';
 }