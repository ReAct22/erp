<?php
function GetDataBarang(){
	$conn = Koneksi();
	$sql = "SELECT *FrOM tlbmst_product WHERE status = 1";
	$data = mysqli_query($conn, $sql);
	return $data;
}

function KodeBarang(){
	$conn = Koneksi();
	$sql = "SELECT max(kode) as kode FROM tbmst_product";
	$data = mysqli_query($conn, $sql);
	return $data;
}

function GetDataSatuanProduct(){
	$conn = Koneksi();
	$sql = "SELECT *FROM tblmst_satuan WHERE status = 1";
	$data = mysqli_query($sql);
	return $data;
}

function InsertBarang($kode, $nama, $price, $pajak, $kode_category, $kode_satuan, $barcode, $tgl_expired, $user, $create_at, $update_at, $user_update){

}