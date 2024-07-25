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

// Điều hướng
$act = $_GET["act"] ?? "/";
$a = match ($act) {
    "/" => homeIndex(),

//     "danhmuc" => danhmucList(),
//     "danhmuc_add" => danhmucAdd(),
//     "danhmuc_update" => danhmucUpdate(),
//     "danhmuc_delete" => danhmucDelete(),

    "sanpham" => sanphamList(),
    "sanpham_detail" => sanphamDetail(),
    

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
