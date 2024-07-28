<?php
function getAllDonhang() {
    try {
        $sql = "SELECT * FROM donhang";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllDonhang_Taikhoan($id_taikhoan) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_taikhoan='$id_taikhoan'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneDonhang($id_donhang) {
    try {
        $sql = "SELECT * FROM donhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllChiTietDonHang($id_donhang) {
    try {
        $sql = "SELECT * FROM chitietdonhang WHERE id_donhang='$id_donhang'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addDonhang($ten_nguoinhan, $diachi, $sdt, $id_thanhtoan, $ghichu, $listId_sanpham) {
    $id_taikhoan = $_SESSION["user"]["id_taikhoan"];
    $ma_donhang = $id_taikhoan . date("YmdHisu");

    try {
        $sql = "INSERT INTO donhang(ma_donhang, id_taikhoan, ten_nguoinhan, diachi, sdt, id_thanhtoan, ghichu) 
            VALUES ('$ma_donhang', '$id_taikhoan', '$ten_nguoinhan', '$diachi', '$sdt', '$id_thanhtoan', '$ghichu')";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        addChitietdonhang($listId_sanpham);
    } catch (\Exception $e) {
        debug($e);
    }
}

function getDonhangLast() {
    try {
        $sql = "SELECT * FROM donhang ORDER BY id_donhang DESC LIMIT 1";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function addChitietdonhang($listId_sanpham) {
    try {
        $id_donhang = getDonhangLast()["id_donhang"];
        foreach ($listId_sanpham as $id_sanpham) {
            $sql = "INSERT INTO chitietdonhang(id_sanpham, id_donhang) 
            VALUES ('$id_sanpham', '$id_donhang')";
            $stmt = $GLOBALS["conn"]->prepare($sql);
            $stmt->execute();
        }
    } catch (\Exception $e) {
        debug($e);
    }
}