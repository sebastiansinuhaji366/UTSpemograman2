<!doctype html>
<html>
<head>
        <tittle> menampilkan hasil input form</tittle>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <div class="container">
        <div class="row">
        <div class="col-md-12">

         <form action="proses-edit-data_grosir.php" method="post">
             <?php
             $id=$_GET['id'];
                include "koneksi.php";
                $tampil=$koneksi->query("select * from data_grosir where id_barang='$id'");
                $row=$tampil->fetch_assoc();
             ?>
            <div class="form-group">
                <label for="kode_barang">kode barang<b> </b></label>
                <Input type="hidden" name="id_barang" value="<?php echo$row['id_barang']?>" class="form-control">
                <Input type="text" name="kode_barang" value="<?php echo$row['kode_barang']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_barang"><b>nama barang</b></label>
                <Input type="text" name="nama_barang" value="<?php echo$row['nama_barang']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="source_barang"><b>source barang</b></label>
                <Input type="text" name="source_barang" value="<?php echo$row['source_barang']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_barang"><b>harga barang</b></label>
                <Input type="text" name= "harga_barang" value= "<?php echo$row['harga_barang']?>" class="form-control">
            
            </div>
            <div class="form-group">
                <label for="jumlah_barang"><b>Jumlah barang</b></label>
                <Input type="text" name="jumlah_barang" value="<?php echo$row['jumlah_barang']?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_modal"><b> harga modal</b></label>
                <Input type="text" name="harga_modal" value="<?php echo$row['harga_modal']?>" class="form-control">
        
</div>
            <div class="form-group">
                <label for="status"><b>status</b></label>
                <select name="status" class="form-control">
                <option value ="<?php echo$row['status']?>" selected><?php echo$row['status']?></option>
                <option value ="rusak"> rusak</option>
                <option value ="bagus"> bagus</option></select>
            </div>

            <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>