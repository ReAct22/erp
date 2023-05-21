<?php
function GetData(){
    $conn = Koneksi();
    $sql = "SELECT *FROM tblmst_category WHERE status = true";
    $data = mysqli_query($conn, $sql);
    return $data;
}

function GetKode(){
    $conn = Koneksi();
    $sql = "SELECT max(kode) as kode  FROM tblmst_category";
    $kode = mysqli_query($conn, $sql);
    return $kode;
}

function Insert($kode, $nama, $user, $create_at, $update_at, $user_update){
    $conn = Koneksi();
    // var_dump($create_at);
    $sql = "INSERT INTO tblmst_category (kode, nama, user, create_at, update_at, user_update) values(?,?,?,?,?,?)";
    $data = [$kode, $nama, $user, $create_at, $update_at, $user_update];
    mysqli_execute_query($conn, $sql, $data);
}

function UpdateCategory($kode, $nama, $user_update, $update_at){
    // var_dump($kode);
     $conn = Koneksi();
     $sql = "UPDATE tblmst_category set nama = ?, user_update = ?, update_at = ? WHERE kode = '".$kode."'";
     $data = [$nama,$user_update, $update_at];
     mysqli_execute_query($conn, $sql, $data);
}

function SoftDeleteCategory($kode, $update_at){
    // var_dump($kode);
    $conn = Koneksi();
    $sql = "UPDATE tblmst_category set update_at = ?, status = ? WHERE kode = '".$kode."'";
    $data = [$update_at, false];
    mysqli_execute_query($conn, $sql, $data);
}