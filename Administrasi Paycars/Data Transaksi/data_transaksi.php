<?php
ob_start();
?>

<?php

include '../koneksi/koneksi.php';

$transaksi = query("SELECT * FROM data_transaksi");
?>

<?php

if (isset($_POST['submit'])) {
    $id_transaksi = $_POST['id_transaksi'];
    $id_mobil = $_POST['id_mobil'];
    $id_pengguna = $_POST['id_pengguna'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $status_transaksi = $_POST['status_transaksi'];

    $sql = "INSERT INTO `data_transaksi`(`id_transaksi`, `id_mobil`, `id_pengguna`, `tanggal_transaksi`, `status_transaksi`) 

    VALUES ('$id_transaksi','$id_mobil','$id_pengguna','$tanggal_transaksi','$status_transaksi')";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("Location: data_transaksi.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($koneksi);
    }
}

?>

<script src="../assets/js/ui-modals.js"></script>

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
            <?php foreach ($transaksi as $data) : ?>
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
                                    <a class="dropdown-item" href="edit.php?id_transaksi=<?= $data["id_transaksi"] ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                    <a class="dropdown-item" href="delete.php?id_transaksi=<?= $data["id_transaksi"] ?>"><i class="bx bx-trash me-2"></i> Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>

<!-- Modal tambah data -->
<div class="modal fade" id="tambahdata" tabindex="-1" aria-hidden="true">
    <form action="" method="POST">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel3">Detail</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="../assets/img/avatars/1.png" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg" />
                            </label>
                            <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                                <i class="bx bx-reset d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Reset</span>
                            </button>

                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                        </div>
                    </div>
                    <hr class=" mt-4 mb-4">
                    <div class="row g-2">

                        <div class="mb-0">
                            <label for="emailLarge" class="form-label">Id Transaksi</label>
                            <input type="text" name="id_transaksi" class="form-control" placeholder="Masukkan id transaksi" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Id Transaksi</label>
                            <input type="text" name="id_mobil" class="form-control" placeholder="Masukkan id mobil" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Id Pengguna</label>
                            <input type="text" name="id_pengguna" class="form-control" placeholder="Masukkan id pengguna" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Tanggal Transaksi</label>
                            <input type="date" name="tanggal_transaksi" class="form-control" placeholder="Masukkan Tanggal Transaksi" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Status Transaksi</label>
                            <input type="text" name="status_transaksi" class="form-control" placeholder="Masukkan Status Transaksi" />
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </form>
</div>
<!--  Modal tambah data -->

<?php
$konten = ob_get_clean();
include '../admin/body.php';
?>