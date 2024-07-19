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

if (empty($_SESSION["giohang"])) $_SESSION["giohang"] = [];

// Điều hướng
$act = $_GET["act"] ?? "/";
$a = match ($act) {
    "/" => homeIndex(),

    "giohang" => giohangList(),
    "giohang_add" => giohangAdd($_GET["id"]),
    "giohang_delete" => giohangDelete($_GET["id"]),

//     "danhmuc" => danhmucList(),
//     "danhmuc_add" => danhmucAdd(),
//     "danhmuc_update" => danhmucUpdate(),
//     "danhmuc_delete" => danhmucDelete(),

//     "sanpham" => sanphamList(),
//     "sanpham_detail" => sanphamDetail(),
//     "sanpham_add" => sanphamAdd(),
//     "sanpham_update" => sanphamUpdate(),
//     "sanpham_delete" => sanphamDelete(),

//     "taikhoan" => taikhoanList(),
//     "taikhoan_detail" => taikhoanDetail(),
//     "taikhoan_delete" => taikhoanDelete(),

//     "binhluan" => binhluanList(),
//     "binhluanDelete" => binhluanDelete(),
//     "binhluan_hide" => binhluanHide(),
//     "binhluan_unhide" => binhluanUnhide(),

//     "donhang" => donhangList(),
//     "donhang_detail" => donhangDetail(),
    
//     "thanhtoan" => thanhtoanList(),
//     "thanhtoan_add" => thanhtoanAdd(),
//     "thanhtoan_update" => thanhtoanUpdate(),
//     "thanhtoan_delete" => thanhtoanDelete(),
};

include_once "master.php";

require_once "./commons/disconnect-db.php";
