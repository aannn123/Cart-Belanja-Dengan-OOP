<?php 

require __DIR__ . '/vendor/autoload.php';

use App\Pembeli;
use App\Produk;
use App\Laptop;

// Masukan Nama Anda

echo "Masukan Nama Anda ... \n " ;
$username = fopen("php://stdin", "r");
$username = fgets($username);
system('clear');

echo "Silahkan Isi Saldo Anda : Rp. ";
$saldo = fopen("php://stdin", "r");
$saldo = fgets($saldo);
system('clear');

$namaProduk = new Produk( 'Farhan Mustaqiem');
sleep(1);
$namaProduk->harga(3);
sleep(1);
$farhan = new Pembeli('Farhan', $namaProduk);
sleep(1);
$farhan->jenis('Laptop Asus',"2,650,000" );
sleep(1);
$farhan->cekSaldo();


 ?>