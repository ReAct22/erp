<?php
include "./models/Category.php";
function GetListData(){
    $data = GetData();
    return $data;
}

function GetNewKode(){
    $kode = GetKode();
    $data = mysqli_fetch_array($kode);
    $kodeCategory = $data['kode'];
    $urut = (int) substr($kodeCategory,3,3);
    $urut++;
    $huruf = "C";
    $kodeData = $huruf.sprintf("%03s", $urut);
    return $kodeData;
}

function InsertCategory($kode, $nama){
    $date = getdate(date("U"));
    $datetime = $date['year']."-".$date['mon']."-".$date['mday'];
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');
    $kodeCategory = $kode;
    $namaCategory = $nama;
    $user = "Andrean";
    $create_at =  $timestring;
    $update_at = $timestring;
    $user_update = "Andrean";


    Insert($kodeCategory, $namaCategory, $user, $create_at,$update_at, $user_update);
}

function UpdateDataCategory($kode, $nama){
    // var_dump($kode);
    // var_dump($nama);
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');
    $kodeCategory = $kode;
    $namaCategory = $nama;
    $update_at = $timestring;
    $user_update = 'Ahmad';

    UpdateCategory($kodeCategory, $namaCategory ,$user_update, $update_at);

}

function DeleteCategory($kode){
    $now = new DateTime();
    $timestring = $now->format('Y-m-d h:i:s');
    $kodeCategory = $kode;
    $update_at = $timestring;
    SoftDeleteCategory($kode, $update_at);
}
