<!doctype html>
<html lang="en">

<head>
  <title>Nilai Siswa Praktikum - Pekan 2</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body  class="m-3">
    <h1>Form Nilai Siswa</h1>
    <hr>
    <div class="container">
        <form class="mx-5 d-flex flex-column gap-2" method="POST">
            <div class="form-group row">
                <label class="col-4 col-form-label fw-bold text-end" for="nama">Nama Lengkap</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label fw-bold text-end">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="form-select" required="required">
                    <option value="Dasar-Dasar Pemgrograman">Dasar-Dasar Pemrograman</option>
                    <option value="Pemrograman Website 2">Pemrograman Website 2</option>
                    <option value="Desain UI-UX">Desain UI/UX</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label fw-bold text-end">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control w-50" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uas" class="col-4 col-form-label fw-bold text-end">Nilai UAS</label> 
                <div class="col-8">
                <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control w-50" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas" class="col-4 col-form-label fw-bold text-end">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control w-50" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="alert alert-secondary font-italic" role="alert">
        Persentase Pembagian Nilainya Adalah <b>30% UTS</b>, <b>35% UAS</b> dan <b>TUGAS 35%</b>.
    </div>
<?php
    $grade = $predikat = $hasil= "";
    if(isset($_POST['simpan'])) {
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $tugas = $_POST['tugas'];
    
    // hitung nilai akhir berdasarkan persentase UTS, UAS, dan TUGAS
    $nilai_akhir = 0.3 * $uts + 0.35 * $uas + 0.35 * $tugas;
        
        if ($nilai_akhir >= 55) {
            $hasil = "LULUS";
        } else {
            $hasil = "TIDAK LULUS";
        }
        if ($nilai_akhir < 0 || $nilai_akhir > 100) {
            $grade = "I";
        } else if ($nilai_akhir >= 85) {
            $grade = "A";
        } else if ($nilai_akhir >= 70) {
            $grade = "B";
        } else if ($nilai_akhir >= 56) {
            $grade = "C";
        } else if ($nilai_akhir >= 36) {
            $grade = "D";
        } else {
            $grade = "E";
        }
        switch ($grade) {
            case "A": $predikat = "Sangat Memuaskan"; break;  
            case "B": $predikat = "Memuaskan"; break;  
            case "C": $predikat = "Cukup"; break;  
            case "D": $predikat = "Kurang"; break;  
            case "E": $predikat = "Sangat Kurang"; break;  
            case "I": $predikat = "Tidak Ada"; break;  
        }
    echo "Nama Anda: " . $_POST['nama'] . "<br>";
    echo "Mata Kuliah: " . $_POST['matkul'] . "<br>";
    echo "Nilai akhir Anda adalah: " . $nilai_akhir . "<br>";
    echo "Nilai Grade/Predikat Anda Adalah: " . $grade . ", ". $predikat . "<br>";
    echo "Anda Dinyatakan: <b>" . $hasil . "<b>";
    
    }

?>
</body>

</html>