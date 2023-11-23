<?php
ob_start();
?>

<?php

include '../koneksi/koneksi.php';

$pengguna = query("SELECT * FROM data_pengguna");
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
        header("Location: data_pengguna.php?msg=New record created successfully");
    } else {
        echo "Failed: " . mysqli_error($koneksi);
    }
}

?>

<script src="../assets/js/ui-modals.js"></script>

<div class="card">

    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="">Data Pengguna</h3>

        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahdata">Tambah Data</button>
    </div>

    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id Pengguna</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No Hp</th>
                    <th>Aksi</th>
                    <img src="" alt="">
                </tr>
            </thead>
            <?php foreach ($pengguna as $data) : ?>
                <tbody class="table-border-bottom-0">
                    <tr>
                        <td><?= $data["id_pengguna"] ?></td>
                        <td><?= $data["nama_pengguna"] ?></td>
                        <td><?= $data["username_pengguna"] ?></td>
                        <td><?= $data["email_pengguna"] ?></td>
                        <td><?= $data["nomor_telepon_pengguna"] ?></td>
                        <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">

                                    <a class="dropdown-item" href="edit_pengguna.php?id_pengguna=<?= $data["id_pengguna"] ?>"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                    <a class="dropdown-item" href="delete.php?id_pengguna=<?= $data["id_pengguna"] ?>"><i class="bx bx-trash me-2"></i> Delete</a>
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
                            <label for="emailLarge" class="form-label">Id Pengguna</label>
                            <input type="text" name="id_pengguna" class="form-control" placeholder="Masukkan id pengguna" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Nama</label>
                            <input type="text" name="nama_pengguna" class="form-control" placeholder="Masukkan Nama" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Username</label>
                            <input type="text" name="username_pengguna" class="form-control" placeholder="Masukkan Username" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Email</label>
                            <input type="text" name="email_pengguna" class="form-control" placeholder="Masukkan Email" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Password</label>
                            <input type="text" name="password_pengguna" class="form-control" placeholder="Masukkan Password" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">No Telepon</label>
                            <input type="text" name="nomor_telepon_pengguna" class="form-control" placeholder="Masukkan Password" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Alamat</label>
                            <input type="text" name="alamat_pengguna" class="form-control" placeholder="Masukkan Alamat" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Tipe Akun</label>
                            <input type="text" name="tipe_akun" class="form-control" placeholder="Tipe Akun" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Status Pengguna</label>
                            <input type="text" name="status_pengguna" class="form-control" placeholder="Status Pengguna" />
                        </div>

                        <div class="col-md-6">
                            <label for="dobLarge" class="form-label">Profil Pengguna</label>
                            <input type="text" name="profil_pengguna" class="form-control" placeholder="Profil Pengguna" />
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