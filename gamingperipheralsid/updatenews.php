<?php  
include 'koneksi.php';

$id = $_GET['id'];
$query = "SELECT * from tbjfw_news where id_news='$id' ";
$sql = mysqli_query($koneksi,$query);
$d = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Barang</title>
</head>
<body>
<form action="editnews.php" method="POST" enctype="multipart/form-data">
	<table>
		<input type="text" name="id" hidden value="<?php echo $d['id_news'] ?>">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="title" value="<?php echo $d['title']?>"></td>
		</tr>
        <tr>
            <td>Desc</td>
            <td><input type="text" name="descr" value="<?php echo $d['descr'] ?>"></td>
        </tr>
		<tr>
			<td>Gambar</td>
			<td><input type="file" name="gambar" value="<?php echo $d['gambar'] ?>"></td>
		</tr>
        <tr>
			<td>Link</td>
			<td><input type="text" name="linknews" value="<?php echo $d['linknews'] ?>"></td>
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