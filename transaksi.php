<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>
	<style type="text/css">
		td {
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Daftar Transaksi</h1>
	<a href="tambahtransaksi.php"><button type="submit">Tambah Transaksi</button></a>
	<a href="index.php"><button type="submit">Menu Awal</button></a>
	<table border="2">
		<tr>
			<th width="40%">Kode Reservasi</th>
			<th width="40%">Menu</th>
			<th width="20%">Option</th>
		</tr>
		<?php
		$query = "SELECT * FROM tbl_transaksi INNER JOIN tbl_reservasi ON tbl_transaksi.id_reservasi = tbl_reservasi.id_reservasi INNER JOIN tbl_menu ON tbl_transaksi.id_menu = tbl_menu.id_menu ORDER BY tbl_reservasi.id_reservasi DESC";
		$data = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($data)){	
			?> 
		<tr>
			<td><?php echo $row['kode_reservasi']; ?></td>
			<td><?php echo $row['menu']; ?></td>
			<td><a href="edittransaksi.php?id=<?php echo $row['id_transaksi'] ?>">Edit</a> || <a href="hapustransaksi.php?id=<?php echo $row['id_transaksi'] ?>">Hapus</a></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>