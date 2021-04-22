<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Menu</title>
	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<h1><font size="5" face="Comic Sans MS" color="blue">Tambah Menu</font></h1>
	<form action="prosestambahmenu.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Menu : </label></td>
				<td><input type="text" name="menu"></td>
			</tr>
			<tr>
				<td><label>Harga : </label></td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Tambah</button></td>
			</tr>
		</table>
	</form>
	<a href="tambahmenu.php"><button>Batal</button>

	<br>
	<br>
	<a href="daftarmenu.php"><button>Kembali ke Daftar Menu</button></a>
</body>
</html>