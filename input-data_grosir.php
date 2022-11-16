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

         <form action="proses-input-data_grosir.php" method="post">
            <div class="form-group">
                <label for="kode_barang"><b>kode_barang </b></label>
                <Input type="text" name="kode_barang" class="form-control">
            </div>
            <div class="form-group">
                <label for="nama_barang"><b>NAMA_barang</b></label>
                <Input type="text" name="nama_barang"class="form-control">
            </div>
            <div class="form-group">
                <label for="source_barang"><b>source_barang</b></label>
                <Input type="text" name="source_barang"class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_barang"><b>harga_barang</b></label>
                <Input type="text" name="harga_barang"class="form-control">
            </div>
            <div class="form-group">
                <label for="jumlah_barang"><b>jumlah_barang</b></label>
                <Input type="text" name="jumlah_barang"class="form-control">
            </div>
            <div class="form-group">
                <label for="harga_modal"><b> harga_modal</b></label>
                <Input type="text" name="harga_modal"class="form-control">
            </div>
            <div class="form-group">
                <label for="status"><b>status</b></label>
                <select name="status" class ="form-control">
                <option value ="rusak"> rusak</option>
                <option value ="bagus"> bagus</option></select>
            </div>

            <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
            <input type="reset" name="kosongkan" value="KOSONGKAN"class="btn btn-danger">
            
        </form>
</div></div></div>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>