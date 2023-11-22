<?php
ob_start();
?>

<?php

include '../koneksi/koneksi.php';

$pengguna = query("SELECT * FROM kategori_mobil");
?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="">Kategori Mobil</h3>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Keterangan Kategori</th>
                </tr>
            </thead>
            <?php foreach ($pengguna as $data) : ?>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><?= $data["id_kategori"] ?></td>
                        <td><?= $data["nama_kategori"] ?></td>
                        <td><?= $data["keterangan_kategori"] ?></td>
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