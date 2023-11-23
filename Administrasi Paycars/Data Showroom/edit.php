<?php
include "../koneksi/koneksi.php";
$id = $_GET["id_showroom"];

if (isset($_POST["submit"])) {
    $id_showroom = $_POST['id_showroom'];
    $id_pengguna = $_POST['id_pengguna'];
    $nama_showroom = $_POST['nama_showroom'];
    $alamat_showroom = $_POST['alamat_showroom'];
    $email_pemilik = $_POST['email_pemilik'];
    $nomor_telepon_pemilik = $_POST['nomor_telepon_pemilik'];
    $keterangan_showroom = $_POST['keterangan_showroom'];

    $sql = "UPDATE `showroom_mobil` SET `id_showroom`='$id_showroom',`id_pengguna`='$id_pengguna',`nama_showroom`='$nama_showroom',`alamat_showroom`='$alamat_showroom',`email_pemilik`='$email_pemilik',`nomor_telepon_pemilik`='$nomor_telepon_pemilik',`keterangan_showroom`='$keterangan_showroom' WHERE id_showroom = '$id'";

    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        header("Location: showroom_mobil.php?msg=Data updated successfully");
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

    <title>Edit Transaksi Paycars</title>
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        Edit Transaksi Paycars
    </nav>

    <div class="container">
        <div class="text-center mb-4">
            <h3>Edit Pengguna Informasi</h3>
            <p class="text-muted">Click update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM `showroom_mobil` WHERE id_showroom = '$id' LIMIT 1";
        $result = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label">Id Transaksi:</label>
                        <input type="text" class="form-control" name="id_transaksi" value="<?php echo $row['id_transaksi'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Id Mobil:</label>
                        <input type="text" class="form-control" name="id_mobil" value="<?php echo $row['id_mobil'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Id Pengguna:</label>
                        <input type="text" class="form-control" name="id_pengguna" value="<?php echo $row['id_pengguna'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Transaksi:</label>
                        <input type="date" class="form-control" name="tanggal_transaksi" value="<?php echo $row['tanggal_transaksi'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Transaksi:</label>
                        <input type="text" class="form-control" name="status_transaksi" value="<?php echo $row['status_transaksi'] ?>">
                    </div>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="data_transaksi" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>