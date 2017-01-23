<?php 

namespace App;


Class Produk
{
	private $saldo = 2650000 * 3;

	public function __construct($kode)
	{
		if ($kode == 'Farhan Mustaqiem') {
			echo "Selamat Datang $kode :). \n" ;
			sleep(1);
			echo "Silahkan Beli Produk Yang Anda Inginkan. \n";
			sleep(1);
			echo "Berhasil Memasukan Produk Kedalam Keranjang yaitu . \n";
		}else{
			echo "Produk Belum Di Masukan Ke Keranjang";
		}
	}

	public function catatProduk($jenis  , $jumlah = 1)
	{
		echo "Nama Produk Yang Dimasukan Ke Dalam Keranjang $jenis, Jumlah Barang $jumlah Ke Dalam Keranjang. \n";
	}

	public function diskon($jumlah)
	{
		$this->catatProduk('Diskon Produk Sebesar', $jumlah);
		$this->saldo -= $jumlah;
	}

	public function harga($jumlah)
	{
		$this->catatProduk('Laptop Asus', $jumlah);
		$this->saldo += $jumlah;
	}

	public function cekHarga()
	{
		return $this->saldo;
	}
}

 ?>