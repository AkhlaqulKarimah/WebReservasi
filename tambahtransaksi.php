<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Transaksi</title>
</head>
<body>
	<h1>Tambah Transaksi</h1>
	<form action="prosestambahtransaksi.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><label>Kode Reservasi</label></td>
				<td> : </td>
				<td>
					<select name="kode_reservasi">
						<?php
						$kode = mysqli_query($con, "SELECT * FROM tbl_reservasi");
						while ($datareservasi = mysqli_fetch_array($kode)) {
							echo '<option value="'.$datareservasi['id_reservasi'].'">'.$datareservasi['kode_reservasi'].' Atas Nama '.$datareservasi['nama_pemesan'].'</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td><label>Menu</label></td>
				<td> : </td>
				<td>
					<select name="menu">
						<?php
						$menu = mysqli_query($con, "SELECT * FROM tbl_menu");
						while ($datamenu = mysqli_fetch_array($menu)) {
							echo '<option value="'.$datamenu['id_menu'].'">'.$datamenu['menu'].'</option>';
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Tambah</button></td>
			</tr>
		</table>
	</form>
	<td><a href="transaksi.php"><button>Kembali</button></a></td>
</body>
</html>