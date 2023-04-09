<?php
require_once 'dbkoneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<!-- DataTables -->
<link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<div class="content-wrapper">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Table List Produk</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <a class="btn btn-success my-1" href="?page=pages/form_produk.php" role="button">Create Produk</a>
      <table id="list_pelanggan" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Qty</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($rs as $row) {
          ?>
            <tr>
              <td>
                <?= $nomor ?>
              </td>
              <td>
                <?= $row['kode'] ?>
              </td>
              <td>
                <?= $row['nama'] ?>
              </td>
              <td>
                <?= $row['harga_jual'] ?>
              </td>
              <td>
                <?= $row['stok'] ?>
              </td>
              <td>
                <a class="btn btn-primary" href="?page=pages/view_produk.php&id=<?= $row['id'] ?>">View</a>
                <a class="btn btn-primary" href="?page=pages/form_produk.php&idedit=<?= $row['id'] ?>">Edit</a>
                <a class="btn btn-danger" href="pages/proses_produk.php?iddel=<?= $row['id'] ?>"
                  onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
              </td>
            </tr>
          <?php
            $nomor++;
          }
          ?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Qty</th>
            <th>Action</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function() {
    $("#list_pelanggan").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#list_pelanggan_wrapper .col-md-6:eq(0)');
  });
</script>
