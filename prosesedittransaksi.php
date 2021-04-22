<?php
include 'config.php';

$id = $_GET['id'];
$reservasi = $_POST['kode_reservasi'];
$menu = $_POST['menu'];
$jumlah = $_POST['jumlah'];
$query1 = "SELECT * FROM tbl_transaksi INNER JOIN tbl_reservasi ON tbl_transaksi.id_reservasi = tbl_reservasi.id_reservasi INNER JOIN tbl_menu ON tbl_transaksi.id_menu = tbl_menu.id_menu WHERE id_transaksi = '$id'";
	$hasil = mysqli_query($con, $query1);
	$data = mysqli_fetch_array($hasil);
	$reservasi = $data['id_reservasi'];

$query = "UPDATE tbl_transaksi SET id_reservasi = '$reservasi', id_menu = '$menu', jumlah = '$jumlah' WHERE id_transaksi = '$id'";
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
