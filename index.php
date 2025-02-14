<?php
// Khởi tạo session
session_start();

// Require files trong commons
require_once "./commons/env.php";
require_once "./commons/helper.php";
require_once "./commons/connect-db.php";
// require_once "./commons/check-login.php";

// Require files trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$arrRouteNeedAuth = [
    "giohang",
    "giohang_add",
    "giohang_delete",
];

$error = "";

if (empty($_SESSION["giohang"])) $_SESSION["giohang"] = [];

// Điều hướng
$act = $_GET["act"] ?? "/";
$a = match ($act) {
    "/" => homeIndex(),

    "dangnhap" => dangNhap(),
    "dangki" => dangKi(),

    "danhmuc" => danhmucList(),
    "danhmuc_detail" => danhmucDetail(),

    "sanpham_detail" => sanphamDetail(),

    "giohang" => giohangList(),
    "giohang_add" => giohangAdd($_GET["id"]),
    "giohang_delete" => giohangDelete(),

    "thanhtoan" => thanhtoan(),
    
    "lichsu" => lichsuList(),
    "lichsu_chitiet" => lichsuDetail(),
    
    "taikhoan_detail" => taikhoanDetail(),
    "taikhoan_update" => taikhoanUpdate(),
    "taikhoan_forgotpassword" => taikhoanForgotPassword(),
    "taikhoan_logout" => taikhoanLogout(),
};

include_once "master.php";

require_once "./commons/disconnect-db.php";
