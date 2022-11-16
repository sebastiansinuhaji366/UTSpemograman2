<?php
$kode_barang=$_POST['kode_barang'];
$nama_barang=$_POST['nama_barang'];
$source_barang=$_POST['source_barang'];
$harga_barang=$_POST['harga_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$harga_modal=$_POST['harga_modal'];
$status=$_POST['status'];

include "koneksi.php";

$simpan=$koneksi->query("insert into data_grosir (kode_barang,nama_barang,source_barang,harga_barang,jumlah_barang,harga_modal,status) 
                        values('$kode_barang','$nama_barang','$source_barang','$harga_barang','$jumlah_barang','$harga_modal','$status')");

if($simpan==true){

    header("location:tampil_data_grosir.php?pesan=inputBerhasil");
} else {
    echo "Error";
}


?>