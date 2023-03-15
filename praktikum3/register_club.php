<!doctype html>
<html lang="en">

<head>
    <title>Register Club</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="p-5">


    <?php
    // Defining ARRAY
    $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
    $ar_skill = ["HTML" => 10, "CSS" => 10, "JavaScript" => 20, "RWD Bootstrap" => 20, "PHP" => 30, "Python" => 30, "Java" => 50];
    $ar_domisili = ["Jakarta", "Depok", "Bogor", "Tanggerang", "Bekasi", "Lainnya"];
    ?>
    <div class="group">
        <h1 class="mb-4 fw-bold">Form Registrasi IT Club Data Science</h1>
        <hr>
    </div>
    <form class="row gap-2" method="POST">
        <div class="form-group row align-items-center">
            <label for="nim" class="col-4">NIM</label>
            <div class="col-8">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-adn"></i></span>
                    <input type="text" class="form-control" name="nim" id="nim" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="nama" class="col-4">Nama Lengkap</label>
            <div class="col-8">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-address-book"></i></span>
                    <input type="text" class="form-control" name="nama" required="required">
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8 d-flex gap-2">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_0" type="radio" required="required" class="custom-control-input"
                        value="L">
                    <label for="gender_0" class="custom-control-label">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="gender" id="gender_1" type="radio" required="required" class="custom-control-input"
                        value="P">
                    <label for="gender_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="prodi" class="col-4">Program Studi</label>
            <div class="col-8">
                <select id="prodi" name="prodi" class="form-select" required="required">
                    <?php foreach ($ar_prodi as $matkul => $val) { ?>
                        <option value="<?= $matkul ?>"><?= $val ?></option>
                    <?php } ?>

                </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Web &amp; Programming</label>
            <div class="col-8">
                <div class="d-flex gap-2 flex-wrap">
                    <?php foreach ($ar_skill as $skill => $point) { ?>
                        <span class="checkbox-group">
                            <input type="checkbox" name="skills[]" id="skill_0" value="<?= $skill ?>">
                            <label for="skill_0" class="custom-control-label">
                                <?= $skill ?>
                            </label>
                        </span>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="form-group row align-items-center">
            <label for="domisili" class="col-4">Tempat Domisili</label>
            <div class="col-8">
                <select id="domisili" name="domisili" required="required" class="form-select">
                    <?php foreach ($ar_domisili as $val) { ?>
                        <option value="<?= $val ?>"><?= $val ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    <hr>

    <?php
    function skor($value)
    {
        global $ar_skill;
        $total = 0;
        if (is_array($value)) {
            foreach ($value as $x) {
                $total += $ar_skill[$x];
            }
        }
        return $total;
    }

    function predikat($nilai)
    {
        if ($nilai == 0) {
            return "Tidak Memadai";
        } else if ($nilai > 0 && $nilai <= 40) {
            return "Kurang";
        } else if ($nilai > 40 && $nilai <= 60) {
            return "Cukup";
        } else if ($nilai > 60 && $nilai <= 100) {
            return "Baik";
        } else if ($nilai > 100 && $nilai <= 150) {
            return "Sangat Baik";
        } else {
            return "Tidak Valid";
        }
    }


    if (isset($_POST['submit'])) {
        if (isset($_POST['skills'])) {
            $skill = $_POST['skills'];
        } else {
            $skill = 'None';
        }
        ?>
        <p><b>NIM :
                <?= $_POST['nim']; ?>
            </b></p>
        <p><b>Nama :
                <?= $_POST['nama']; ?>
            </b></p>
        <p><b>Domisili :
                <?= $_POST['domisili']; ?>
            </b></p>
        <p><b>Jenis Kelamin :
                <?= $_POST['gender']; ?>
            </b></p>
        <p><b>Program Studi :
                <?= $_POST['prodi']; ?>
            </b></p>
        <p>
            <b>Skill :
                <?php
                if (is_array($skill)) {
                    echo implode(", ", $skill);
                } else {
                    echo $skill;
                } ?>
            </b>
        </p>
        <p><b>Skor Skill :
                <?= skor($skill); ?>
            </b></p>
        <p><b>Kategori Skill :
                <?= predikat(skor($skill)); ?>
            </b></p>

    <?php } ?>

</body>

</html>