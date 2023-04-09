<?php
require_once 'dbkoneksi.php';
?>
<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM pelanggan WHERE id=?";
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
            <td>Nama</td>
            <td>
                <?= $row['nama'] ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>
                <?= $row['jk'] ?>
            </td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>
                <?= $row['tmp_lahir'] ?>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>
                <?= $row['tgl_lahir'] ?>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>
                <?= $row['email'] ?>
            </td>
        </tr>
        <tr>
            <td>Jenis Kartu</td>
            <td>
                <?= $row['kartu_id'] ?>
            </td>
        </tr>
    </tbody>
</table>
  <div class="group mx-3 mb-2">
    <a class="btn btn-danger" href="?page=pages/list_pelanggan.php" role="button">Go Back</a>
</div>
</div>
</div>
