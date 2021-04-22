<?php
	include 'config.php';
	
	$id = $_GET['id']; 
	$query1 = "SELECT * FROM tbl_transaksi INNER JOIN tbl_reservasi ON tbl_transaksi.id_reservasi = tbl_reservasi.id_reservasi INNER JOIN tbl_menu ON tbl_transaksi.id_menu = tbl_menu.id_menu WHERE id_transaksi = '$id'";
	$hasil = mysqli_query($con, $query1);
	$data = mysqli_fetch_array($hasil);
	$reservasi = $data['id_reservasi'];
	// var_dump($reservasi);die;
	$query = mysqli_query($con,"DELETE FROM tbl_transaksi WHERE id_transaksi='$id'");
	
	
	

	
	// var_dump($query);die;
// var_dump($data['id_reservasi']);die;
	if ($query > 0) {
		?>
		<script type="text/javascript">
			alert('Data Berhasil Dihapus');
			document.location.href = "detailreservasi.php?id=<?php echo $reservasi ?>";
		</script>
		<?php
		echo mysqli_error($con);
		exit;
	} else {
		?>
		<script type="text/javascript">
			alert('Data Masih Terhubung dengan Tabel Lain');
			document.location.href = "detailreservasi.php?id=<?php echo $reservasi ?>";
		</script>
		<?php
	}
?>