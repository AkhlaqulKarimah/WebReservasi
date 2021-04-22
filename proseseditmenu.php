<?php
include 'config.php';

$id = $_GET['id'];
$menu = $_POST['menu'];
$harga = $_POST['harga'];

	//cek menu di database
	$cek_menu=mysqli_num_rows(mysqli_query($con, "SELECT * FROM tbl_menu WHERE menu = '$menu'"));
	// var_dump($cek_menu);die();
	//kalau menu sudah ada yang dipakai
	if($cek_menu>0) {
		?>
	<script type="text/javascript">
		alert("Menu Sudah Ada");
		document.location.href="daftarmenu.php";
	</script>
	<?php
	}
	//kalau menu valid, inputkan data ke tabel menu
	else {
	$query = "UPDATE tbl_menu SET menu = '$menu', harga = '$harga' WHERE id_menu = '$id'";
		mysqli_query($con, $query);
		?>

		<script type="text/javascript">
				alert("input data success, file tersimpan");
				document.location.href="daftarmenu.php";
			</script>
			<?php
		}
?>
