<?php
	include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Reservasi</title>
	<style type="text/css">
		body {
			background-color: lightgrey;
		}
	</style>
</head>
<body>
	<p class="body" align="center"><font size="6" face="Comic Sans MS" color="blue">
	Selamat Datang
	<br/>

	<a href="daftarreservasi.php"><button>Daftar Reservasi</button></a>
	<a href="daftarmenu.php"><button>Daftar Menu</button></a>
	</p></font>

	<br>
	<h1><font size="5" face="Comic Sans MS" color="blue">Daftar Reservasi</font></h1>
	<br>
	<a href="tambahreservasi.php"><button type="submit">Tambah Reservasi</button></a>
	<br>
	<br>
	
	<form action="" method="post">
		<input type="date" name="cari">
		<button type="submit" name="tombolcari">Cari </button>
		<button type="submit" name="semua">Semua</button>
	</form>

	<br>
	<table border="2">
		<tr>
			<th>Kode Reservasi</th>
			<th>Nama Pemesan</th>
			<th>Total Tagihan</th>
			<th>Detail</th>
			<th>Opsi</th>
		</tr>
		<?php
		if (isset($_POST['tombolcari'])) {
			$cari = date_create($_POST['cari']);
			$cari1 = date_format($cari,"Ymd");
			$query = "SELECT * FROM tbl_reservasi WHERE kode_reservasi LIKE '$cari1%'";
					// var_dump($query);die;
			$data = mysqli_query($con, $query);
		} elseif (isset($_POST['semua'])) {
			$query = "SELECT * FROM tbl_reservasi";
			$data = mysqli_query($con, $query);
		} else {
			$create = date_create(date('Ymd'));
			$today = date_format($create,'Ymd');
			// var_dump($today);die;
			$query = "SELECT * FROM tbl_reservasi WHERE kode_reservasi LIKE '$today%'";
			$data = mysqli_query($con, $query);
		}
		while($row = mysqli_fetch_array($data)){	
			?> 
		<tr>
			<td><?php echo $row['kode_reservasi']; ?></td>
			<td><?php echo $row['nama_pemesan']; ?></td>
			<td><?php echo $row['tagihan']; ?></td>
			<td><a href="detailreservasi.php?id=<?php echo $row['id_reservasi'] ?>">Detail</a></td>
			<td><a href="editreservasi.php?id=<?php echo $row['id_reservasi'] ?>">Edit</a> || <a href="hapusreservasi.php?id=<?php echo $row['id_reservasi'] ?>">Hapus</a></td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>