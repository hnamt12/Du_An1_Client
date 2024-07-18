<?php 
function homeIndex(){
    $view = 'home' ;
    $listSanpham = getAllSanpham_Home();
    require_once('master.php');
}