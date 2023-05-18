<?php 
    class bmiPasien {
        public static $nama,$umur,$jenisKelamin,$berat,$tinggi;
        function __construct($nama,$umur,$jenisKelamin,$berat,$tinggi){
            $this->nama = $nama;
            $this->umur = $umur;
            $this->jenisKelamin = $jenisKelamin;
            $this->berat = $berat;
            $this->tinggi = $tinggi / 100;

        }
        function hasilBmi() {
            return round($this->berat / ($this->tinggi * $this->tinggi),2);
        }
        function statusBmi($bmi) {
            if ($bmi < 18.5) {
                $status = "Kekurangan Berat Badan";
            } elseif ($bmi >= 18.5 && $bmi < 25) {
                $status = "Normal";
            } elseif ($bmi >= 25 && $bmi < 30) {
                $status = "Kelebihan Berat Badan";
            } else {
                $status = "Obesitas";
            }
            return $status;
        }
    }

$pasien1 = new bmiPasien("Ronin","18","Lk","80","1.7");
?>