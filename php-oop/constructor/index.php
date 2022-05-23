<?php
    // membuat class
    class Produk {
        // membuat property
        public $judul,
               $penulis, 
               $penerbit,
               $harga;
        
        // constructor method
        public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $harga = 0) {
            $this->judul =  $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        // membuat method
        public function getLabel () {
            return "$this->penulis, $this->penerbit";
        }
    }
    
    // membuat object
    $produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
    $produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 25000);
    
    // tampilkan hasil
    echo "Komik : ".$produk1->getLabel();
    echo "<br>";
    echo "Game : ".$produk2->getLabel();
?>