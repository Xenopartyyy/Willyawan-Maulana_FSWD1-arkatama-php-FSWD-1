<?php
// koneksi ke database
require_once("koneksidb.php");

// ambil data dari form
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

// query untuk insert data ke tabel categories
if (isset($name)) {
    $sql = "INSERT INTO categories (name) VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($conn);
    }
}

// tutup koneksi database
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Insert Data Categories</title>
	<!-- memuat file CSS Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<style>
		/* menambahkan padding pada body */
		body {
			padding: 20px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Form Insert Data Categories</h1>
		<br>
		<a href="DataStok.php" class="btn btn-warning">&lt;&lt;Kembali</a>
		<br><br>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<div class="form-group">
				<label for="name">Nama Kategori:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<button type="submit" class="btn btn-primary">Simpan</button>
		</form>
	</div>
	<!-- memuat file JS Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
