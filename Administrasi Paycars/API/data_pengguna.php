<?php
require_once('../koneksi/koneksi.php');
$myArray = array();
if ($result = mysqli_query($koneksi, "SELECT * FROM data_pengguna ")) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
    }
    mysqli_close($koneksi);
    echo json_encode($myArray);
}
