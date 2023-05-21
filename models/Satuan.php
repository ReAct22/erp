<?php
function GetDataSatuan(){
    $conn = Koneksi();
    $sql = "SELECT *FROM tblmst_satuan where status = true";
    $data = mysqli_query($conn, $sql);
    return $data;
}

function GetKodeSatuan(){
    $conn = Koneksi();
    $sql = "SELECT max(kode) as kode  FROM tblmst_satuan";
    $kode = mysqli_query($conn, $sql);
    return $kode;
}

function InsertSatuan($kode, $nama, $user, $create_at, $update_at, $user_update){
    $conn = Koneksi();
    // var_dump($create_at);
    $sql = "INSERT INTO tblmst_satuan (kode, nama, user, create_at, update_at, user_update) values(?,?,?,?,?,?)";
    $data = [$kode, $nama, $user, $create_at, $update_at, $user_update];
    mysqli_execute_query($conn, $sql, $data);
}

function UpdateSatuan($kode, $nama, $user_update, $update_at){
    // var_dump($kode);
     $conn = Koneksi();
     $sql = "UPDATE tblmst_satuan set nama = ?, user_update = ?, update_at = ? WHERE kode = '".$kode."'";
     $data = [$nama,$user_update, $update_at];
     mysqli_execute_query($conn, $sql, $data);
}

function SoftDeleteSatuan($kode, $update_at){
    // var_dump($kode);
    $conn = Koneksi();
    $sql = "UPDATE tblmst_satuan set update_at = ?, status = ? WHERE kode = '".$kode."'";
    $data = [$update_at, false];
    mysqli_execute_query($conn, $sql, $data);
}