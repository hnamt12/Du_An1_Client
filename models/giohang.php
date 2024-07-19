<?php
// function getGiohang_Id($id_taikhoan) {
//     $giohang = getGiohang_Taikhoan($id_taikhoan);

//     if (empty($giohang)) {
//         $giohang = 
//     }
// }

// function getGiohang_Taikhoan($id_taikhoan) {
//     try {
//         $sql = "SELECT * FROM giohang WHERE id_taikhoan='$id_taikhoan' LIMIT 1";
//         $stmt = $GLOBALS["conn"]->prepare($sql);
//         $stmt->execute();
//         return $stmt->fetch();
//     } catch (\Exception $e) {
//         debug($e);
//     }
// }