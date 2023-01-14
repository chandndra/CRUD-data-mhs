<?php

include 'koneksi.php';
$id = $_GET['updid'];
$sql = "Select * from `coba` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$alamat = $row['alamat'];
$jurusan = $row['jurusan'];
$nama = $row['nama'];
$npm  = $row['npm'];
$univ = $row['univ'];
if (isset($_POST['kirim'])) {
    $alamat = $_POST['alamat'];
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $univ = $_POST['univ'];

    $sql = "update `coba` set id=$id, nama='$nama',univ='$univ',jurusan='$jurusan',npm='$npm',alamat='$alamat'
            where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        //echo "Data Berhasil Diperbaharui";
        header('Location:tampilan.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEMPERBAHARUI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post">
            <div class="formulir">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Isikan Nama Anda" name="nama" autocomplete="off"
                    value=<?php echo $nama; ?>>
            </div>
            <div class="formulir">
                <label>Nama Universitas Anda</label>
                <input type="text" class="form-control" placeholder="Isikan Nama Universitas Anda" name="univ"
                    autocomplete="off" value=<?php echo $univ; ?>>
            </div>
            <div class="formulir">
                <label>Masukkan Jurusan Anda</label>
                <input type="text" class="form-control" placeholder="Masukkan Jurusan Anda" name="jurusan"
                    autocomplete="off" value=<?php echo $jurusan; ?>>
            </div>
            <div class="formulir">
                <label>Masukkan Nomor Induk Mahasiswa</label>
                <input type="number" class="form-control" placeholder="Masukkan Nomor Induk Mahasiswa Anda" name="npm"
                    autocomplete="off" value=<?php echo $npm; ?>>
            </div>
            <div class="formulir">
                <label>Masukkan Alamat Anda</label>
                <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat"
                    autocomplete="off" value=<?php echo $alamat; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="kirim">kirim</button>
        </form>
    </div>
</body>

</html>