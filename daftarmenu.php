<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Menu</title>
	<style type="text/css">
		body {
			background-color: lightgrey;
		}
		th {
			text-align: center;
		}
		td {
			text-align: center;
		}
	</style>
</head>
<body>
	<a href="daftarreservasi.php"><button type="submit">Kembali</button></a>
	<h1><font size="5" face="Comic Sans MS" color="blue">Daftar Menu</font></h1>
	<a href="tambahmenu.php"><button type="submit">Tambah Menu</button></a>
	<br>
	<br>
	<table border="2">
		<tr>
			<th>Nama Menu</th>
			<th>Harga</th>
			<th>Opsi</th>
		</tr>
		<?php
		$query = "SELECT * FROM tbl_menu";
		$data = mysqli_query($con, $query);
		while($row = mysqli_fetch_array($data)){	
			?> 
		<tr>
			<td><?php echo $row['menu']; ?></td>
			<td>Rp. <?php echo $row['harga']; ?></td>
			<td><a href="editmenu.php?id=<?php echo $row['id_menu'] ?>">Edit</a> || <a href="hapusmenu.php?id=<?php echo $row['id_menu'] ?>">Hapus</a></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>