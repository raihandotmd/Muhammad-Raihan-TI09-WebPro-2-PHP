<?php 
require_once('bmiPasien.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php 
        if (isset($_POST['submit'])) {
        $_nama = $_POST['nama'];
        $_berat = $_POST['berat'];
        $_tinggi = $_POST['tinggi'];
        $_umur = $_POST['umur'];
        $_gender = $_POST['gender'];
        $pasien2 = new bmiPasien($_nama,$_umur,$_gender,$_berat,$_tinggi);

        echo 'Nama: '.$_nama;
        echo '<br>Berat Badan: '.$_berat;
        echo '<br>Tinggi Badan: '.$_tinggi;
        echo '<br>Umur: '.$_umur;
        echo '<br>Gender: '.$_gender;
        echo '<br>BMI: '.$pasien2->hasilBmi();
        echo '<br>Status BMI: '.$pasien2->statusBmi($pasien2->hasilBmi());
        }
    ?>
</body>
</html>