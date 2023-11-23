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

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Edit Pengguna Paycars</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Edit Pengguna Paycars
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Transaksi Informasi</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `data_pengguna` WHERE id_pengguna = '$id' LIMIT 1";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label">Id Pengguna:</label>
                        <input type="text" class="form-control" name="id_pengguna" value="<?php echo $row['id_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama:</label>
                        <input type="text" class="form-control" name="nama_pengguna" value="<?php echo $row['nama_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Username:</label>
                        <input type="text" class="form-control" name="username_pengguna" value="<?php echo $row['username_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email_pengguna" value="<?php echo $row['email_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password:</label>
                        <input type="password" class="form-control" name="password_pengguna" value="<?php echo $row['password_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nomor Telepon:</label>
                        <input type="number" class="form-control" name="nomor_telepon_pengguna" value="<?php echo $row['nomor_telepon_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat:</label>
                        <input type="text" class="form-control" name="alamat_pengguna" value="<?php echo $row['alamat_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tipe Akun:</label>
                        <input type="text" class="form-control" name="tipe_akun" value="<?php echo $row['tipe_akun'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Pengguna:</label>
                        <input type="text" class="form-control" name="status_pengguna" value="<?php echo $row['status_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Profil Pengguna:</label>
                        <input type="text" class="form-control" name="profil_pengguna" value="<?php echo $row['profil_pengguna'] ?>">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="data_pengguna" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>