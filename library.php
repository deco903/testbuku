<?php
class Library{
	public function __construct(){
		$this->db = new PDO('mysql:host=localhost;dbname=bukudb','root',''); 
	}

	public function addBook($judul, $pengarang, $penerbit, $tahun){
		$sql = "INSERT INTO bukutb (judul, pengarang, penerbit, tahun) VALUES ('$judul',' $pengarang','$penerbit','$tahun')";
		$query = $this->db->query($sql);

		if(!$query){
			return 'failed';
		}else{
			return 'success';
		}
	}

	public function showBook(){
		$sql = 'SELECT * FROM bukutb';
		$query = $this->db->query($sql);
		return $query;
	}

	public function editBook($id){
		$sql = "SELECT * FROM bukutb WHERE id = '$id'";
		$query = $this->db->query($sql);
		return $query;
	}

	public function updateBook($kode, $judul, $pengarang, $penerbit, $tahun){

		$sql = "UPDATE bukutb SET judul = '$judul', pengarang = '$pengarang', penerbit = '$penerbit', tahun = '$tahun' WHERE id = '$kode'";
		$query = $this->db->query($sql);
		if(!$query){
			return 'failed';
		}else{
			return 'succes';
		}
	}

	public function deleteBook($kode){

		$sql = "DELETE FROM bukutb WHERE id = '$kode'";
		$query = $this->db->query($sql);
		
		if(!$query){
			return 'gagal hapus';
		}else{
			return 'berhasil hapus';
		}
	}

}

?>