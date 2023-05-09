<?php
// koneksi ke database
require_once("koneksidb.php");

// cek apakah form telah disubmit
if (isset($_POST['submit'])) {

  // ambil data dari form
  $category_id = $_POST['category_id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $status = $_POST['status'];

  // ambil waktu saat ini
  $created_at = date("Y-m-d H:i:s");

  // set nilai default untuk created_by
  $created_by = 1;

  // query untuk insert data
  $sql = "INSERT INTO products (category_id, name, description, price, status, created_at, created_by)
          VALUES ('$category_id', '$name', '$description', '$price', '$status', '$created_at', '$created_by')";

  // eksekusi query
  if (mysqli_query($conn, $sql)) {
    echo "Data berhasil disimpan.";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  // tutup koneksi database
  mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Tambah Produk</title>
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
    <h1>Tambah Produk</h1>
    <br>
    <a href="DataStok.php" class="btn btn-warning">&lt;&lt;Kembali</a>
    <br><br>
    <form method="POST" action="">
      <div class="form-group">
        <label>ID Kategori:</label>
        <input type="text" class="form-control" name="category_id">
      </div>
      <div class="form-group">
        <label>Nama Produk:</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label>Deskripsi:</label>
        <input type="text" class="form-control" name="description">
      </div>
      <div class="form-group">
        <label>Harga:</label>
        <input type="text" class="form-control" name="price">
      </div>
      <div class="form-group">
        <label>Status:</label>
        <select class="form-control" name="status">
          <option value="accepted">Accepted</option>
          <option value="waiting">Waiting</option>
          <option value="rejected">Rejected</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    </form>
  </div>
  <!-- memuat file JS Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>