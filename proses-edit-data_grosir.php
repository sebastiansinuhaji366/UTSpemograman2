<?php

include "koneksi.php";
$id_barang=$_POST['id_barang'];
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$source_barang=$_POST['source_barang'];
$harga_barang=$_POST['harga_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$harga_modal=$_POST['harga_modal'];
$status=$_POST['status'];

$ubah=$koneksi->query("update data_grosir set kode_barang='$kode_barang', nama_barang='$nama_barang', source_barang='$source_barang', 
harga_barang='$harga_barang', jumlah_barang='$jumlah_barang', harga_modal='$harga_modal', status='$status' where id_barang='$id_barang'");

if($ubah==true){

    header("location:tampil_data_grosir.php?pesan=editBerhasil");
} else{
    echo"Error";
}



?>