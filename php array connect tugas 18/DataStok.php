<!DOCTYPE html>
<html>
<head>
	<title>Tabel Produk & Kategori</title>
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
		<h1>Tabel Produk & Kategori</h1>
		<br>
		<a href="categories_insert.php" class="btn btn-primary">Tambah Kategori</a>
		<a href="products_insert.php" class="btn btn-primary">Tambah Produk</a>
		<br><br>
		<table class="table table-striped table-bordered">
			<thead class="text-center">
				<tr >
					<th class="text-center">ID Produk</th>
					<th class="text-center">ID Kategori</th>
					<th class="text-center">Nama Kategori</th>
					<th class="text-center">Nama Produk</th>
					<th class="text-center">Deskripsi</th>
					<th class="text-center">Harga</th>
					<th class="text-center">Status</th>
					<th class="text-center">created_at</th>
					<th class="text-center">updated_at</th>
					<th class="text-center">created_by</th>
				</tr>
			</thead>
			<tbody>
				<?php
					// koneksi ke database
					require_once("koneksidb.php");

					// query data dengan JOIN
					$sql = "SELECT products.id, products.category_id, categories.name as category_name, products.name as product_name, products.description, products.price, products.status, products.created_at, products.updated_at, products.created_by
							FROM products
							INNER JOIN categories
							ON products.category_id = categories.id
                            ORDER BY products.id asc";
					$result = mysqli_query($conn, $sql);

					// tampilkan data dalam tabel
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$row['id']."</td>";
						echo "<td>".$row['category_id']."</td>";
						echo "<td>".$row['category_name']."</td>";
						echo "<td>".$row['product_name']."</td>";
						echo "<td>".$row['description']."</td>";
						echo "<td>".$row['price']."</td>";
						echo "<td>".$row['status']."</td>";
						echo "<td>".$row['created_at']."</td>";
						echo "<td>".$row['updated_at']."</td>";
						echo "<td>".$row['created_by']."</td>";
						echo "</tr>";
					}

					// tutup koneksi database
					mysqli_close($conn);
				?>
			</tbody>
		</table>
	</div>
	<!-- memuat file JS Bootstrap -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>