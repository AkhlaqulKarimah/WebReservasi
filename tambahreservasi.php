<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Reservasi</title>
	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<form action="prosestambahreservasi.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Nama Pemesan :</label></td>
				<td><input type="text" name="nama_pemesan"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Tambah</button></td>
			</tr>
		</table>
	</form>
	<a href="tambahreservasi.php"><button type="submit" name="batal">Batal</button></a>

	<br>
	<br>
	<br>
	
	<a href="daftarreservasi.php"><button type="submit">Kembali ke Daftar Reservasi</button></a>


</body>
</html>