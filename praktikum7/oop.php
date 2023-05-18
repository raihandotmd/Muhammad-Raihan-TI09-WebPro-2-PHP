<?php 
class persegiPanjang {
    private $panjang, $lebar;
    function __construct($panjang,$lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    function getLuas() {
        return $this->panjang * $this->lebar;
    }
    function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}


$persegiPanjang1 = new persegiPanjang(14, 8);


echo "Luas Persegi Panjang: ".$persegiPanjang1->getLuas();
echo"<br>";
echo "Keliling Persegi Panjang: ".$persegiPanjang1->getKeliling();


?>