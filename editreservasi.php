<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Reservasi</title>
	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<h1><font size="5" face="Comic Sans MS" color="blue">Edit Reservasi</font></h1>
	<?php
	$id = $_GET['id'];
	$query = "SELECT * FROM tbl_reservasi WHERE id_reservasi = '$id'";
	$result = mysqli_query($con, $query);
	$data = mysqli_fetch_array($result);
	?>
	<form action="proseseditreservasi.php?id=<?php echo $data['id_reservasi'] ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Nama Pemesan</label></td>
				<td> : </td>
				<td><input type="text" name="nama_pemesan" value="<?php echo $data['nama_pemesan'] ?>"></td>
			</tr>
			<tr>
				<td><button type="submit" name="edit">Edit</button></td>
			</tr>
		</table>
	</form>
<a href="daftarreservasi.php"><button>Kembali</button></a>
</body>
</html>