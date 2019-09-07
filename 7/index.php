<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gudang";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$er_kategori = ""; 
	if(isset($_POST["submit"])){
		if($_POST["kategori"]==""){
			$er_kategori = "form kategori wajib diisi";
		}else{
			$sql = "INSERT INTO categories(name) VALUES ('".$_POST["kategori"]."')";
			
			if (mysqli_query($conn, $sql)) {
				$er_kategori = "Data baru berhasil ditambahkan";
			} else {
				$er_kategori = "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
			
		}

	}

	$sql = "SELECT categories.name,group_concat(products.name) as products
	FROM categories LEFT JOIN products on categories.category_id = products.category_id
	group by categories.category_id";
	$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Data Gudang</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	  <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<h2>Tambah Kategori</h2>
			<form action ="index.php" method="post">
			  <div class="input-group">
				<input type="text" class="form-control" placeholder="Kategori" name="kategori" >
				<div class="input-group-btn">
				  <button class="btn btn-primary" type="submit" name="submit" value="submit">
					Tambah
				  </button>
				</div>
			  </div>
			</form>
			<small><?php echo $er_kategori; ?></small>
			<hr>
			<h2>Data Kategori Produk</h2>
			<p>Berikut Merupakan Data tabel kategori produk</p>
				<table class="table">
				<thead>
				  <tr>
					<th>Name</th>
					<th>Products</th>
				  </tr>
				</thead>
				<tbody>
					<?php
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)) {
					?>
					<tr>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['products']; ?></td>
					</tr>
					<?php
					}
					} else {
					?>
					<tr>
						<td colspan="2">tidak ada data</td>
					</tr>	
					<?php
						
					}
					?>
				</tbody>
			  </table>
		</div>
	</body>
</html>
