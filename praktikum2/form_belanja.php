<!doctype html>
<html lang="en">

<head>
  <title>Tugas PHP Praktikum Pekan 2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body  class="m-4">
    <div class ="container-group d-flex">
        <div class="container">
            <h2>Belanja Online</h2>
            <hr>
            <form method="POST">
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label fw-bold">Customer</label> 
                <div class="col-8">
                <input id="customer" name="customer" placeholder="Nama  Customer" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row my-2">
                <label class="col-4 fw-bold">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="tv" required> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="kulkas" required> 
                    <label for="produk_1" class="custom-control-label">KULKAS</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci" required> 
                    <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label fw-bold">Jumlah</label> 
                <div class="col-8">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="number" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row mt-2">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
            </form>
        </div>
        <div class="container">
            <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                <li class="list-group-item">TV: 4.200.000</li>
                <li class="list-group-item">Kulkas: 3.100.000</li>
                <li class="list-group-item">MESIN CUCI: 3.800.000</li>
                <li class="list-group-item active">Harga Dapat Berubah Setiap Saat</li>
            </ul>
        </div>
    </div>
    
    <hr>
<?php 
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$total;

switch ($produk) {
    case "tv": 
        $total = 4.2 * $jumlah;
        break;
    case "kulkas": 
        $total = 3.1 * $jumlah;
        break;
    case "mesin cuci": 
        $total = 3.8 * $jumlah;
        break;

}

echo "Nama Customer : ".$customer."<br>";
echo "Produk Pilihan : ".$produk."<br>";
echo "Jumlah Beli : ".$jumlah."<br>";
echo "Total Belanja : Rp. ".$total."00.000,-";

?>

</body>

</html>