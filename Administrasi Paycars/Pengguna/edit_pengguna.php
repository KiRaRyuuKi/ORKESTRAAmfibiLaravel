<?php
ob_start();
?>

<?php
include "../koneksi/koneksi.php";
$id = $_GET["id_pengguna"];

if (isset($_POST["submit"])) {
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

    $sql = "UPDATE `data_pengguna` SET `id_pengguna`='$id_pengguna',`nama_pengguna`='$nama_pengguna',`username_pengguna`='$username_pengguna',`email_pengguna`='$email_pengguna',`password_pengguna`='$password_pengguna',`nomor_telepon_pengguna`='$nomor_telepon_pengguna',`alamat_pengguna`='$alamat_pengguna',`tipe_akun`='$tipe_akun',`status_pengguna`='$status_pengguna',`profil_pengguna`='$profil_pengguna' WHERE id_pengguna = '$id'";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("Location: data_pengguna.php?msg=Data updated successfully");
    } else {
        echo "Failed: " . mysqli_error($koneksi);
    }
}

$sql = "SELECT * FROM `data_pengguna` WHERE id_pengguna = '$id' LIMIT 1";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);

?>

<div class="card mb-4">
    
    <h3 class="card-header bg-primary text-white">Edit Pengguna</h3>
    <!-- Account -->
    <!-- <div class="card-body">
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
    </div> -->
    <hr class="my-0" />
    <div class="card-body">
        <form method="post">
            <div class="row">
                <div class="mb-3 col-md-6 ">
                    <label class="form-label">Id Pengguna:</label>
                    <input type="text" class="form-control" name="id_pengguna" value="<?php echo $row['id_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama_pengguna" value="<?php echo $row['nama_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Username:</label>
                    <input type="text" class="form-control" name="username_pengguna" value="<?php echo $row['username_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email_pengguna" value="<?php echo $row['email_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password_pengguna" value="<?php echo $row['password_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Nomor Telepon:</label>
                    <input type="number" class="form-control" name="nomor_telepon_pengguna" value="<?php echo $row['nomor_telepon_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Alamat:</label>
                    <input type="text" class="form-control" name="alamat_pengguna" value="<?php echo $row['alamat_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Tipe Akun:</label>
                    <input type="text" class="form-control" name="tipe_akun" value="<?php echo $row['tipe_akun'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Status Pengguna:</label>
                    <input type="text" class="form-control" name="status_pengguna" value="<?php echo $row['status_pengguna'] ?>">
                </div>

                <div class="mb-3 col-md-6">
                    <label class="form-label">Profil Pengguna:</label>
                    <input type="text" class="form-control" name="profil_pengguna" value="<?php echo $row['profil_pengguna'] ?>">
                </div>

            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-primary me-2" name="submit">Update</button>
                <a href="data_pengguna.php" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>

<?php
$konten = ob_get_clean();
include '../admin/body.php';
?>