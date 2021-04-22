<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Transaksi</title>

	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<?php
		$id = $_GET['id'];
		$query1 = "SELECT * FROM  tbl_reservasi WHERE id_reservasi = '$id'";
		$data1 = mysqli_query($con, $query1);
		$row1 = mysqli_fetch_array($data1);
		?>

	<a href="daftarreservasi.php"><button type="submit">Kembali</button></a>

	<h1><font size="5" face="Comic Sans MS" color="blue">Daftar Transaksi</font></h1>
	<br>
	<a href="cetak.php?id=<?php echo $row1['id_reservasi'] ?>" target="_blank"><button type="submit">Cetak Print Kwitansi</button></a><br><br>

	<table>
		<tr>
			<td><label>Kode Reservasi : </label></td>
			<td><?php echo $row1['kode_reservasi'] ?></td>
		</tr>
		<tr>
			<td><label>Nama : </label></td>
			<td><?php echo $row1['nama_pemesan']; ?></td>
		</tr>
	</table>
	<table border="2">
		<tr>
			<th>Menu</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Total</th>
			<th>Option</th>
		</tr>
		<?php
		// $id = $_GET['id'];
		$query = "SELECT * FROM tbl_transaksi INNER JOIN tbl_reservasi ON tbl_transaksi.id_reservasi = tbl_reservasi.id_reservasi INNER JOIN tbl_menu ON tbl_transaksi.id_menu = tbl_menu.id_menu WHERE tbl_reservasi.id_reservasi = '$id'";
		$data = mysqli_query($con, $query);
		$total = 0;
		while($row = mysqli_fetch_array($data)){	
			$subtotal = $row['harga']*$row['jumlah'];
			$total = $total + $subtotal;
			?> 

		<tr>
			<td><?php echo $row['menu']; ?></td>
			<td><?php echo $row['harga']; ?></td>
			<td><?php echo $row['jumlah']; ?></td>
			<td><?php echo $subtotal; ?></td>
			<td><a href="edittransaksi.php?id=<?php echo $row['id_transaksi'] ?>">Edit</a> || <a href="hapustransaksi.php?id=<?php echo $row['id_transaksi'] ?>">Hapus</a></td>
		</tr>

		<?php
		}
		mysqli_query($con, "UPDATE tbl_reservasi SET tagihan = '$total' WHERE id_reservasi = '$id'")
		?>

	</table>

	<h3>Total Harga adalah <?php echo $total ?></h3>
	<a href="tambahtransaksi2.php?id=<?php echo $id ?>"><button type="submit">Tambah Pesanan</button></a>

	<a href="daftarreservasi.php"><button type="submit">Daftar Reservasi</button></a>


</body>
</html>