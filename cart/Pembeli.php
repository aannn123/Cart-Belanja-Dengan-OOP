<?php 

namespace App;

use App\Produk;

Class Pembeli
{
	private $nama;
	private $produk;

	
	public function __construct($nama = "Orang", Produk $produk)
	{
		$this->nama = $nama;
		$this->produk = $produk;
	}

	public function jenis($nama = "Barang", $harga = 0)
	{
		if ($this->produk->cekHarga() < $harga) {
			echo "Uang Anda Tidak Cukup Untuk Pembelian Produk ini";
			exit();
		}


		$this->produk->diskon($harga);
		echo "Berhasil Melakukan Pembelian $nama Seharga Rp. $harga.\n";
		sleep(1);
		echo "Total Harga ";
		echo $this->produk->cekHarga() . "\n";		
		echo "Terima Kasih Atas Pembelianya $this->nama :D \n";
        sleep(1);
		echo "Selamat Datang Kembali $this->nama :P  \n";		
		sleep(1);
		echo "Semoga Harimu Menyenangkan :) (: :D ";
	}

	public function cekSaldo()
	{
		echo "\n Total Harga ";
		echo $this->produk->cekHarga() . "\n";
	}
}

 ?>