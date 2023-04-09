<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<div class="content-wrapper">
  <div class="card">
<table class="table table-striped">
<tbody>
        <tr>
            <td>ID</td>
            <td>
                <?= $row['id'] ?>
            </td>
        </tr>
        <tr>
            <td>Kode</td>
            <td>
                <?= $row['kode'] ?>
            </td>
        </tr>
        <tr>
            <td>Nama Produk</td>
            <td>
                <?= $row['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>Harga Jual</td>
            <td>
                <?= $row['harga_jual'] ?>
            </td>
        </tr>
        <tr>
            <td>Harga Beli</td>
            <td>
                <?= $row['harga_beli'] ?>
            </td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>
                <?= $row['stok'] ?>
            </td>
        </tr>
        <tr>
            <td>Minimum Stok</td>
            <td>
                <?= $row['min_stok'] ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Produk</td>
            <td>
                <?= $row['jenis_produk_id'] ?>
            </td>
        </tr>
    </tbody>
</table>
  <div class="group mx-3 mb-2">
    <a class="btn btn-danger" href="?page=pages/list_pelanggan.php" role="button">Go Back</a>
</div>
</div>
</div>
