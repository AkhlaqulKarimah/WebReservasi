<?php
include 'config.php';

$id = $_GET['id'];
$nama = $_POST['nama_pemesan'];

$query = "UPDATE tbl_reservasi SET nama_pemesan = '$nama' WHERE id_reservasi = '$id'";

if (mysqli_query($con, $query)) {
	?>

	<script type="text/javascript">
		alert("Edit data success, file tersimpan");
		document.location.href="daftarreservasi.php";
	</script>

	<?php
} else {

	?>
	<script type="text/javascript">
		alert("data failed to input");
		document.location.href="daftarreservasi.php";
	</script>
<?php } ?>
