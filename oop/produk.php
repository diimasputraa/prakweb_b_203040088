<?php


class Produk {

    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

}

//$produk1 = new Produk();
//$produk1->judul = "Doraemon";
//var_dump($produk1);

//$produk2 = new Produk();
//$produk2->judul = "Avatar";
//$produk2->tambahProperty = "Mirage";
//var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 50000;

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Amstrong";
$produk4->penerbit = "Bandai Namco";
$produk4->harga = 350000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();