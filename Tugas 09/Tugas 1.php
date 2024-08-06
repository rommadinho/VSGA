<?php
class Segitiga {
    // Properti
    private $alas;
    private $tinggi;

    // Konstruktor
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    // Metode untuk menghitung luas segitiga
    public function hitungLuas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    // Metode untuk menghitung keliling segitiga
    public function hitungKeliling() {
        // Menghitung panjang sisi miring dengan menggunakan teorema Pythagoras
        $sisiMiring = sqrt(pow($this->alas, 2) + pow($this->tinggi, 2));
        return $this->alas + $this->tinggi + $sisiMiring;
    }

    // Getter dan Setter untuk properti alas
    public function getAlas() {
        return $this->alas;
    }

    public function setAlas($alas) {
        $this->alas = $alas;
    }

    // Getter dan Setter untuk properti tinggi
    public function getTinggi() {
        return $this->tinggi;
    }

    public function setTinggi($tinggi) {
        $this->tinggi = $tinggi;
    }
}

// Contoh penggunaan class Segitiga
$segitiga = new Segitiga(3, 4);
echo "Luas segitiga: " . $segitiga->hitungLuas() . "\n";
echo "Keliling segitiga: " . $segitiga->hitungKeliling() . "\n";
?>
