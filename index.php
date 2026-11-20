<?php
 
 require('./PropertyConstant.php');

 use Pbo\MarketPlace\Produk;

 //object
$produk = new Produk();

$produk->setKode('P0001')
       ->setNama('Laptop')
       ->setHarga('10000000')
       ->setStok(5);


//hitung harga
//$pajak = Produk::PAJAK * 100;
//$jumlahPajak = $produk->harga * Produk::PAJAK;

//total
//$total = $produk->harga + $jumlahPajak;

//hasil
echo "Produk: " . $produk->getNama();
echo "<br/>";

echo "Harga: " . $produk->getHarga();
echo "<br/>";

echo "Stok: " . $produk->getStok();
echo "<br/>";

echo "Pajak: " . $produk->pajak() . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp. " . $produk->total();
