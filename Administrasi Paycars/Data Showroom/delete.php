<?php
include "../koneksi/koneksi.php";

$id = $_GET["id_showroom"];
$sql = "DELETE FROM showroom_mobil WHERE `showroom_mobil`.`id_showroom` = '$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("Location: showroom_mobil.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($koneksi);
}
