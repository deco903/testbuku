<?php
if(isset($_GET['kode'])){
	$id = $_GET['kode'];
	$buku->deleteBook($id);
	header('location:index.php');
}
?>