<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
</head>
<body>
	<div class="container">
	<h2>Tambah Buku</h2>
	<a href="index.php">lihat buku</a>
		<div class="row">
			<div class="col-sm-6"><br>
				<form action="" method="post">
					<div class="form-group">
						<label for="judul">judul buku</label>
						<input type="text" class="form-control" name="judul">
					</div>
					<div class="form-group">
						<label for="pengarang">pengarang</label>
						<input type="text" class="form-control" name="pengarang">
					</div>
					<div class="form-group">
						<label for="penerbit">penerbit</label>
						<input type="text" class="form-control" name="penerbit">
					</div>
					<div class="form-group">
						<label for="tahun">tahun</label>
						<input type="text" class="form-control" name="tahun">
					</div>
					<input type="submit" class="btn btn-info" value="tambah" name="submit">
				</form>
			</div>
		</div>
	</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
<?php
require 'library.php';
if(isset($_POST['submit'])){

	$judul = $_POST['judul'];
	$pengarang = $_POST['pengarang'];
	$penerbit = $_POST['penerbit'];
	$tahun = $_POST['tahun'];

	$buku = new Library();
	$add = $buku->addBook($judul, $pengarang, $penerbit, $tahun);

	if($add = 'sucess'){
		header('location:index.php');
	}else{
		echo 'error';
	}
}

?>