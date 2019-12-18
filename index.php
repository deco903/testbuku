<!DOCTYPE html>
<html>
<head>
	<title>Daftar Buku tersedia</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">	
</head>
<body>
  <h2><center>Daftar Buku Tersedia</center></h2>
  <a href="add.php">Tambah Lagi</a>
  <div class="container">
  <table class="table table-bordered table-hover">
  	<thead>
  		<th>Kode Buku</th>
  		<th>Judul Buku</th>
  		<th>Pengarang</th>
  		<th>Penerbit</th>
  		<th>Tahun</th>
  		<th>Action</th>
  	</thead>
  	<?php
  	require 'library.php';
  	$buku = new Library();
  	$show = $buku->showBook();
  	while($data = $show->fetch(PDO::FETCH_OBJ)){
  		echo "
  			<tr>
  			 <td>$data->id</td>
  			 <td>$data->judul</td>
  			 <td>$data->pengarang</td>
  			 <td>$data->penerbit</td>
  			 <td>$data->tahun</td>
  			 <td>
  			   <a href='edit.php?kode=$data->id' class='btn btn-warning btn-xs'>edit</a> | <a href='index.php?delete=$data->id' class='btn btn-danger btn-xs'>Delete</a>
  			 </td>
  			</tr>
  		";

  	}
  	?>
  </table>
  </div>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

<?php
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $buku->deleteBook($id);
  header('location:index.php');
}
?>


