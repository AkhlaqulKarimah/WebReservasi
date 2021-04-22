<?php
include 'config.php';

$reservasi = $_POST['kode_reservasi'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];

$query = "INSERT INTO tbl_transaksi SET id_reservasi = '$reservasi', id_menu = '$menu', jumlah = '$jumlah'";
// var_dump($query);die;
if (mysqli_query($con, $query)) {
	?>

	<script type="text/javascript">
		alert("input data success, file tersimpan");
		document.location.href="detailreservasi.php?id=<?php echo $reservasi ?>";
	</script>

	<?php
} else {

	?>
	<script type="text/javascript">
		alert("data failed to input");
		document.location.href="detailreservasi.php?id=<?php echo $reservasi ?>";
	</script>
<?php } ?>
