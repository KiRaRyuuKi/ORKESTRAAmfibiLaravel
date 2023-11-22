<?php
ob_start();
?>

<?php

include '../koneksi/koneksi.php';

$pengguna = query("SELECT * FROM showroom_mobil");
?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="">Data Showroom</h3>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Showroom</th>
                    <th>Id Pengguna</th>
                    <th>Nama Showroom</th>
                    <th>Alamat</th>
                    <th>Nohp</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <?php foreach ($pengguna as $data) : ?>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><?= $data["id_showroom"] ?></td>
                        <td><?= $data["id_pengguna"] ?></td>
                        <td><?= $data["nama_showroom"] ?></td>
                        <td><?= $data["alamat_showroom"] ?></td>
                        <td><?= $data["email_pemilik"] ?></td>
                        <td><?= $data["nomor_telepon_pemilik"] ?></td>
                        <td><?= $data["keterangan_showroom"] ?></td>
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