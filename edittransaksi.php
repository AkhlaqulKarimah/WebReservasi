<?php 
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Transaksi 2</title>
</head>
<body>
	<h1>Edit Transaksi</h1>
	<?php
	$id = $_GET['id'];
	$query = "SELECT * FROM tbl_transaksi INNER JOIN tbl_reservasi ON tbl_transaksi.id_reservasi = tbl_reservasi.id_reservasi INNER JOIN tbl_menu ON tbl_transaksi.id_menu = tbl_menu.id_menu WHERE id_transaksi = '$id'";
	$result = mysqli_query($con, $query);
	$data = mysqli_fetch_array($result);
	?>
	<form action="prosesedittransaksi.php?id=<?php echo $data['id_transaksi'] ?>" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td><input type="hidden" name="kode_reservasi" value="<?php echo $id ?>"></td>
			</tr>
			<tr>
				<td><label>Menu</label></td>
				<td> : </td>
				<td>
					<select name="menu">
						<option selected="" value="<?php echo $data['id_menu'] ?>"><?php echo $data['menu']. ' : ' .$data['harga'] ?></option>
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
				<td><label>Jumlah</label></td>
				<td> : </td>
				<td><input type="number" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>
			</tr>
			<tr>
				<td><button type="submit" name="tambah">Edit</button></td>
			</tr>
		</table>
	</form>
	<a href="transaksi.php"><button>Kembali</button></a>
</body>
</html>