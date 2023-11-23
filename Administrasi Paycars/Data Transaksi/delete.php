<?php
include "../koneksi/koneksi.php";

$id = $_GET["id_transaksi"];
$sql = "DELETE FROM data_transaksi WHERE `data_transaksi`.`id_transaksi` = '$id'";
$result = mysqli_query($koneksi, $sql);

if ($result) {
    header("Location: data_transaksi.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($koneksi);
}
