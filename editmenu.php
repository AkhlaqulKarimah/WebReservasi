<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Menu</title>
	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<h1>Edit Menu</h1>
	<?php
	$id = $_GET['id'];
	$query = "SELECT * FROM tbl_menu WHERE id_menu = '$id'";
	$result = mysqli_query($con, $query);
	$data = mysqli_fetch_array($result);
	?>
	<form action="proseseditmenu.php?id=<?php echo $data['id_menu'] ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Menu : </label></td>
				<td><input type="text" name="menu" value="<?php echo $data['menu'] ?>"></td>
			</tr>
			<tr>
				<td><label>Harga : </label></td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Edit</button></td>
			</tr>
		</table>
	</form>
	<a href="daftarmenu.php"><button>Kembali</button></a>
</body>
</html>