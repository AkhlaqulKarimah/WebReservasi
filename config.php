<?php
$con = new mysqli("localhost", "root", "", "ujk");
if (!$con) {
    die('Couldnotconnect:'.mysqli_connect_error());
}
?>
