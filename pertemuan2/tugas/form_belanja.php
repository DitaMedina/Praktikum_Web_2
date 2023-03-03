<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
</head>
<body class="countainer">
    <div class="row" >
        <div class="col-8">
          <br>
            <h2>Belanja Online</h2> 
            <hr>
<form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" placeholder="Customer" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
        </div>
        <div class="col-4"> 
        <ul class="list-group">
            <li class="list-group-item active">Daftar Harga</li>
            <li class="list-group-item">TV : 4.200.000</li>
            <li class="list-group-item">KULKAS : 3.100.000</li>
            <li class="list-group-item">MESIN CUCI : 3.800.000</li>
            <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
        </ul>

        </div>
    </div>
</body>
</html>

<?php
$price = [
    'TV' => 4200000,
    'KULKAS' => 3100000,
    'MESIN CUCI' => 3800000

];

if(isset($_POST['submit'])) {
    $nama = $_POST ['nama'];
    $produk = $_POST ['produk'];
    $jumlah = $_POST ['jumlah'];

    echo "Nama Customer : $nama <br>";
    echo "Produk : $produk <br>";
    echo "Jumlah Pembelian: $jumlah <br>";
    echo "Harga : " . number_format($price [$produk] * $jumlah);
}