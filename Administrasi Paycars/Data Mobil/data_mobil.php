<?php
ob_start();
?>

<?php

include '../koneksi/koneksi.php';

$pengguna = query("SELECT * FROM data_mobil");
?>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="">Data Mobil</h3>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</button>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Mobil</th>
                    <th>Id Kategori</th>
                    <th>Id Showroom</th>
                    <th>Merek Mobil</th>
                    <th>Model Mobil</th>
                    <th>Tahun Produksi</th>
                    <th>Warna Mobil</th>
                    <th>Harga Mobil</th>
                    <th>Status Mobil</th>
                </tr>
            </thead>
            <?php foreach ($pengguna as $data) : ?>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><?= $data["id_mobil"] ?></td>
                        <td><?= $data["id_kategori"] ?></td>
                        <td><?= $data["id_showroom"] ?></td>
                        <td><?= $data["merek_mobil"] ?></td>
                        <td><?= $data["model_mobil"] ?></td>
                        <td><?= $data["tahun_produksi"] ?></td>
                        <td><?= $data["warna_mobil"] ?></td>
                        <td><?= $data["harga_mobil"] ?></td>
                        <td><?= $data["status_mobil"] ?></td>
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

<!-- Modal detail data -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">Detail</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">

                    <div class="mb-0">
                        <label for="emailLarge" class="form-label">Id Pengguna</label>
                        <input type="text" id="emailLarge" class="form-control" placeholder="camp coc upgrade nas" />
                    </div>

                    <div class="col-md-6">
                        <label for="dobLarge" class="form-label">Nama</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>

                    <div class="col-md-6">
                        <label for="dobLarge" class="form-label">Username</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>

                    <div class="col-md-6">
                        <label for="dobLarge" class="form-label">Email</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>

                    <div class="col-md-6">
                        <label for="dobLarge" class="form-label">No Telepon</label>
                        <input type="text" id="dobLarge" class="form-control" placeholder="DD / MM / YY" />
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                    Close
                </button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!--  Modal detail data -->

<?php
$konten = ob_get_clean();
include '../admin/body.php';
?>