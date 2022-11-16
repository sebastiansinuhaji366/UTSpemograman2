<?php
$id=$_GET['id'];

include "koneksi.php";
$hapus=$koneksi->query("delete from data_grosir where id_barang='$id'");

if($hapus==true){

    header("location:tampil_data_grosir.php?pesan=hapusBerhasil");

}else{
    echo"Error"; 
}


?>