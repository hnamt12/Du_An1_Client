<?php
function getAllSanpham() {
    try {
        $sql = "SELECT * FROM sanpham";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllSanpham_Home() {
    try {
        $sql = "SELECT * FROM sanpham ORDER BY id_sanpham DESC LIMIT 15";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getAllSanpham_Tuongtu($id_danhmuc, $id_sanpham) {
    try {
        $sql = "SELECT * FROM sanpham WHERE id_danhmuc='$id_danhmuc' AND NOT id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getOneSanpham($id_sanpham) {
    try {
        $sql = "SELECT * FROM sanpham WHERE id_sanpham='$id_sanpham'";
        $stmt = $GLOBALS["conn"]->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}