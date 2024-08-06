<?php
// Class Buku
class Buku {
    private $judul;
    private $penulis;
    private $tahunTerbit;

    // Konstruktor
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Metode untuk menampilkan informasi buku
    public function tampilkanInfo() {
        echo "Judul: " . $this->judul . "\n";
        echo "Penulis: " . $this->penulis . "\n";
        echo "Tahun Terbit: " . $this->tahunTerbit . "\n";
    }

    // Getter untuk properti judul
    public function getJudul() {
        return $this->judul;
    }
}

// Class Perpustakaan
class Perpustakaan {
    private $koleksiBuku = [];

    // Metode untuk menambah buku ke koleksi
    public function tambahBuku($buku) {
        $this->koleksiBuku[] = $buku;
    }

    // Metode untuk menampilkan semua buku dalam koleksi
    public function tampilkanSemuaBuku() {
        foreach ($this->koleksiBuku as $buku) {
            $buku->tampilkanInfo();
            echo "---------------------\n";
        }
    }

    // Metode untuk mencari buku berdasarkan judul
    public function cariBukuBerdasarkanJudul($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if ($buku->getJudul() === $judul) {
                $buku->tampilkanInfo();
                return;
            }
        }
        echo "Buku dengan judul \"$judul\" tidak ditemukan.\n";
    }
}

// Contoh penggunaan class Buku dan Perpustakaan
$buku1 = new Buku("1999", "ahmad soemboel", 1949);
$buku2 = new Buku("pelajaran hidup", "rohmad soparman", 1960);

$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

echo "Menampilkan semua buku:\n";
$perpustakaan->tampilkanSemuaBuku();

echo "\nMencari buku berdasarkan judul '1999':\n";
$perpustakaan->cariBukuBerdasarkanJudul("1999");

echo "\nMencari buku berdasarkan judul 'alexsander the great':\n";
$perpustakaan->cariBukuBerdasarkanJudul("alexsander the great");
?>
