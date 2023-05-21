<?php
include "./models/Satuan.php";
function GetAllData(){
    $data = GetDataSatuan();
    return $data;
}

function GetNewKodeSatuan(){
    $kode = GetKodeSatuan();
    $data = mysqli_fetch_array($kode);
    $kodeSatuan = $data['kode'];
    $urut = (int) substr($kodeSatuan,3,3);
    $urut++;
    $huruf = "S";
    $kodeData = $huruf.sprintf("%03s", $urut);
    return $kodeData;
}

function InsertDataSatuan($kode, $nama){
    $date = getdate(date("U"));
    $datetime = $date['year']."-".$date['mon']."-".$date['mday'];
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');
    $kodesatuan = $kode;
    $namasatuan = $nama;
    $user = "Andrean";
    $create_at =  $timestring;
    $update_at = $timestring;
    $user_update = "Andrean";


    InsertSatuan($kodesatuan, $namasatuan, $user, $create_at,$update_at, $user_update);
    
}

function UpdateDataSatuan($kode, $nama){
    // var_dump($kode);
    // var_dump($nama);
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');
    $kodeCategory = $kode;
    $namaCategory = $nama;
    $update_at = $timestring;
    $user_update = 'Ahmad';

    UpdateSatuan($kodeCategory, $namaCategory ,$user_update, $update_at);

}

function DeleteSatuan($kode){
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');
    $kodeCategory = $kode;
    $update_at = $timestring;
    SoftDeleteSatuan($kode, $update_at);
}