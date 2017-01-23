 <?php 


Class Produc
{
	public $data;          

	public function __construct()

  {
		$this->data[] = [
			'Id_Produk' => 'A001',
			'Nama_Produk' => 'Laptop Asus',
			'Harga_Produk' => '5.900.000',
		];			

		$this->data[] = [
			'Id_Produk' => 'A002',
			'Nama_Produk' => 'Komputer Samsung',
			'Harga_Produk' => '12.560.000',
		];
	}

}

?>