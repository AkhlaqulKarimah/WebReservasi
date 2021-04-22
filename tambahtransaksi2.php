<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Transaksi 2</title>

	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<h1><font size="5" face="Comic Sans MS" color="blue">Tambah Transaksi 2</font></h1>
	<br>
	<form action="prosestambahtransaksi.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="hidden" name="kode_reservasi" value="<?php echo $_GET['id'] ?>"></td>
			</tr>
			<tr>
				<td><label>Menu : </label></td>
				<td>
					<select name="menu">
						<?php
						$menu = mysqli_query($con, "SELECT * FROM tbl_menu");
						while ($datamenu = mysqli_fetch_array($menu)) {
							echo '<option value="'.$datamenu['id_menu'].'">'.$datamenu['menu'].' : '.$datamenu['harga'].'</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Jumlah : </label></td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Tambah</button></td>
			</tr>
		</table>
	</form>
	<a href="transaksi.php"><button>Kembali</button></a>
</body>
</html>