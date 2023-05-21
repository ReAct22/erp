<?php
function Koneksi()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "db_penjualan";

    try {
        $conn = mysqli_connect($server, $username, $password, $database);
    } catch (\Throwable $th) {
        echo "Koneksi Database Gagal : " . mysqli_connect_error();
    }
    return $conn;
}
