<?php  
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * from tbjfw_product where id_produk='$id' ";
$sql = mysqli_query($koneksi,$query);
$d = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Barang</title>
</head>
<body>
<form action="editproduk.php" method="post" enctype="multipart/form-data">
	<table>
		<input type="text" name="id" hidden value="<?php echo $d['id_produk'] ?>">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" value="<?php echo $d['nama']?>"></td>
		</tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar" value="<?php echo $d['gambar'] ?>"></td>
		</tr>
        <tr>
			<td>Link</td>
			<td><input type="text" name="link" value="<?php echo $d['link'] ?>"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
</form>
</body>
</html>