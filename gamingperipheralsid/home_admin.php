<?php  
session_start();

include 'koneksi.php';

if($_SESSION['level']!="admin"){
	header("location:signin.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Admin</title>
</head>
<body>
    <a href="#TableProduct">Table Product</a> <a href="#TableNews"> Table News</a> <a href="logout.php">Logout</a>
    <h1>Produk</h1>
    <form action="tambahproduk.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>nama</td>
                <td>: <input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>: <input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td>link</td>
                <td>: <input type="text" name="link"></td>
            </tr>
            <tr>
                <td>Tipe</td>
                <td>
                    : <select name="tipe" id="">
                        <option value="Sepatu">Sepatu</option>
                        <option value="Clothes">Clothes</option>
                        <option value="PantsAndSuch">Pants and such</option>
                        <option value="Jewelries">Jewelries</option>
                    </select></td>
            </tr>
            <tr>
                <td></td>
		        <td><input type="submit" name="submit" value="Tambah"></td>
	        </tr>	
        </table>
    </form>
    <h1>News</h1>

    <form action="tambahnews.php" method="POST" enctype="multipart/form-data">
        <table id="">
            <tr>
                <td>judul</td>
                <td>: <input type="text" name="title"></td>
            </tr>
            <tr>
                <td>desc</td>
                <td>: <input type="text" name="desc"></td>
            </tr>
            <tr>
                <td>gambar</td>
                <td>: <input type="file" name="gambar"></td>
            </tr>
            <tr>
                <td>link</td>
                <td>: <input type="text" name="linknews"></td>
            </tr>
            <tr>
                <td></td>
		        <td><input type="submit" name="submit" value="Tambah"></td>
	        </tr>	
        </table>
    </form>

    <br>
    <br>

<table id="TableProduct">
	<tr align="center">
		<th>Nama Produk</th>
		<th width="170px">Gambar</th>
		<th width="170px">Link</th>
		<th>OPSI</th>
	</tr>

<?php  
	$query=mysqli_query($koneksi,"SELECT * from tbjfw_product");
	while($data=mysqli_fetch_assoc($query)) :
?>

	<tr align="center">
		<td>
			<?php echo $data['nama'] ?>
		</td>
		<td>
			<img src="produk/<?php echo $data['gambar'] ?>" width="150px" height="100px">
		</td>
        <td>
            <a href="<?php echo $data['link'] ?>">Link beli</a>
        </td>
		<td>
			<a href="deleteproduk.php?id=<?php echo $data['id_produk'] ?>">HAPUS</a>
			<a href="updateproduk.php?id=<?php echo $data['id_produk'] ?>">EDIT</a>
		</td>
	</tr>
<?php endwhile ?>

<br>
<br>

<table id="TableNews">
	<tr align="center">
		<th>Nama Produk</th>
        <th>Desc</th>
		<th width="170px">Gambar</th>
		<th width="170px">Link</th>
		<th>OPSI</th>
	</tr>

<?php  
	$query=mysqli_query($koneksi,"SELECT * from tbjfw_news");
	while($data=mysqli_fetch_assoc($query)) :
?>

	<tr align="center">
		<td>
			<?php echo $data['title'] ?>
		</td>
        <td>
            <?php echo  substr($data['descr'], 0, 50,)  ?>...
        </td>
		<td>
			<img src="produk/<?php echo $data['gambar'] ?>" width="150px" height="100px">
		</td>
        <td>
            <a href="<?php echo $data['linknews'] ?>">Link beli</a>
        </td>
		<td>
			<a href="deletenews.php?id=<?php echo $data['id_news'] ?>">HAPUS</a>
			<a href="updatenews.php?id=<?php echo $data['id_news'] ?>">EDIT</a>
		</td>
	</tr>
<?php endwhile ?>
</table>
</body>
</html>