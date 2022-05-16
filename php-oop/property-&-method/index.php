<?php
    // membuat class
    class Produk {
        // membuat property
        public $judul = "Judul",
               $penulis = "Penulis", 
               $penerbit = "Penerbit",
               $harga = 0;
        
        // membuat method
        public function getLabel () {
            return "$this->penulis, $this->penerbit";
        }
    }
    
    // membuat object
    $produk1 = new Produk();
    $produk1->judul = "Naruto";
    $produk1->penulis = "Masashi Kishimoto";
    $produk1->penerbit = "Shonen Jump";
    $produk1->harga = 30000;
    
    $produk2 = new Produk();
    $produk2->judul = "Uncharted";
    $produk2->penulis = "Neil Druckmann";
    $produk2->penerbit = "Sony Computer";
    $produk2->harga = 25000;
    
    // tampilkan hasil
    echo "Komik : ".$produk1->getLabel();
    echo "<br>";
    echo "Game : ".$produk2->getLabel();
?>