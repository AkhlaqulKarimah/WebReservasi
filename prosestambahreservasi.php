<?php
	include "config.php";
	// mencari kode barang dengan nilai paling besar
	$nama = $_POST['nama_pemesan'];
	//$menu = $_POST['menu'];
	date_default_timezone_set('Asia/Jakarta');
	$tanggal = date('Ymd');
	$query = mysqli_query($con,"SELECT max(kode_reservasi) as maxkode FROM tbl_reservasi WHERE kode_reservasi LIKE '$tanggal%'");

	 // $hasil = mysqli_query($con,$query);

	if (isset($query)) {
		$ambilKode = mysqli_fetch_array($query);
		$kodereservasi = $ambilKode['maxkode'];

		$noUrut = (int) substr($kodereservasi, -4);

		$noUrut++;		
	}
	else {
		$ambilKode = mysqli_fetch_array($query);
		$kodereservasi = $ambilKode['maxkode'];

		$noUrut = (int) substr($kodereservasi, -4);

		$noUrut++;
	}
	// $data = mysqli_fetch_array($hasil);
	// $nomorAnggota = $data['maxNomor'];
	
	$kodereservasibaru = $tanggal .''. sprintf("%04s", $noUrut);

	$query1 = "INSERT INTO tbl_reservasi VALUES (NULL, '$kodereservasibaru', '$nama', '')";
	$hasil1 = mysqli_query($con, $query1);
	if ($hasil1) {
			?>
			<script type="text/javascript">
				alert('Input Reservasi Berhasil');
				window.location.href = 'daftarreservasi.php';
			</script>
			<?php
		} else {
			?>
			<script type="text/javascript">
				alert('Input Reservasi Gagal');
				window.location.href = 'daftarreservasi.php';
			</script>
			<?php
		}
?>