<!doctype html>
<html>
<head>
    <tittle> Data Grosir </tittle>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="DataTables/datatables.min.css" rel="stylesheet">

</head>
    <body>
        <div class="container">
        <div class="row">
        <div clas="col-md-12">
        <h1> Data Grosir</h1>
<?php

if(@$_GET['pesan']=="inputBerhasil"){


?>
<div class="alert alert-success">
    Penyimpanan Berhasil!
</div>

<?php
}
?>
        <?php

        if(@$_GET['pesan']=="hapusBerhasil"){


        ?>
        <div class="alert alert-success">
            Data Berhasil DiHapus!
        </div>

        <?php
        }
        ?>
        
                <?php

                if(@$_GET['pesan']=="editBerhasil"){


                ?>
                <div class="alert alert-success">
                    Perubahan Berhasil!
                </div>

                <?php
                }
                ?>

<table id="datatables" class="table table-bordered">
    <thead>
    <tr> 
        <td> <center><b> kode_barang </center></td> <td> <center><b>Nama_barang </center></td>
        <td><center><b>source_barang </center></td> <td> <center><b>harga_barang </center></td>
        <td><center><b>jumlah_barang </center></td> <td><center><b>harga_modal </center></td>
        <td><center><b>status </center></td>
        <th> 
            <a href="input-data_grosir.php">
                <button class="btn btn-info glyphicon glyphicon-plus"></button>
            </a>
        </th>
    </tr>
</thead>
<tbody>
<?php  
   include "koneksi.php";
   $sql=$koneksi->query("select * from data_grosir order by kode_barang ASC");

   while($row= $sql->fetch_assoc()){
?>
   <tr>
         <td> <center> <?php echo $row['kode_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['nama_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['source_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['harga_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['jumlah_barang'] ?> </center> </td>
         <td> <center> <?php echo $row['harga_modal'] ?> </center> </td>
         <td> <center> <?php echo $row['status'] ?> </center> </td>
         <td>
         <a href="edit-data_grosir.php?id=<?php echo $row['id_barang']?>">
                <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
            </a>
        <a href="hapus-data_grosir.php?id=<?php echo $row['id_barang']?>" onclick="return confirm('anda yakin ingin menghapus data?')">
        <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
            </a>

   </td>
   </tr>
<?php
 }
?>
</tbody>
</table>

</div> </div></div>

        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="DataTables/datatables.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#datatables').DataTable();
            });
        </script>
</body>
</html>