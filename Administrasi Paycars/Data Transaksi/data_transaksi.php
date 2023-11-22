<?php
ob_start();
?>

<?php

include '../koneksi/koneksi.php';

$pengguna = query("SELECT * FROM Data_Transaksi");
?>

<?php

if (isset($_POST['submit'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $username_pengguna = $_POST['username_pengguna'];
    $email_pengguna = $_POST['email_pengguna'];
    $password_pengguna = $_POST['password_pengguna'];
    $nomor_telepon_pengguna = $_POST['nomor_telepon_pengguna'];
    $alamat_pengguna = $_POST['alamat_pengguna'];
    $tipe_akun = $_POST['tipe_akun'];
    $status_pengguna = $_POST['status_pengguna'];
    $profil_pengguna = $_POST['profil_pengguna'];

    $sql = "INSERT INTO `data_pengguna`(`id_pengguna`, `nama_pengguna`, `username_pengguna`, `email_pengguna`, `password_pengguna`, `nomor_telepon_pengguna`, `alamat_pengguna`, `tipe_akun`, `status_pengguna`, `profil_pengguna`) 
    VALUES ('$id_pengguna','$nama_pengguna','$username_pengguna','$email_pengguna','$password_pengguna','$nomor_telepon_pengguna','$alamat_pengguna','$tipe_akun','$status_pengguna','$profil_pengguna')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("Location: Data_Pengguna.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($koneksi);
    }
}

?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="">Data Transaksi</h3>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Transaksi</th>
                    <th>Id Mobil</th>
                    <th>Id Pengguna</th>
                    <th>Tanggal Transaksi</th>
                    <th>Status Transaksi</th>
                </tr>
            </thead>
            <?php foreach ($pengguna as $data) : ?>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><?= $data["id_transaksi"] ?></td>
                        <td><?= $data["id_mobil"] ?></td>
                        <td><?= $data["id_pengguna"] ?></td>
                        <td><?= $data["tanggal_transaksi"] ?></td>
                        <td><?= $data["status_transaksi"] ?></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-2"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<?php
$konten = ob_get_clean();
include '../admin/body.php';
?>