<?php
	include 'config.php';
	$id = $_GET['id']; 
	$query = mysqli_query($con,"DELETE FROM tbl_reservasi WHERE id_reservasi='$id'"); 

	if ($query > 0) {
		?>
		<script type="text/javascript">
			alert('Data Berhasil Dihapus');
			document.location.href = 'daftarreservasi.php';
		</script>
		<?php
		echo mysqli_error($con);
		exit;
	} else {
		?>
		<script type="text/javascript">
			alert('Data Masih Terhubung dengan Tabel Lain');
			document.location.href = 'daftarreservasi.php';
		</script>
		<?php
	}
?>