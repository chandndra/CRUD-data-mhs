<?php
include 'koneksi.php';
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $univ = $_POST['univ'];
    $jurusan = $_POST['jurusan'];
    $npm = $_POST['npm'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];

    $sql = "insert into `coba` (nama,univ,jurusan,npm,alamat,email) values('$nama', '$univ', '$jurusan', '$npm', '$alamat', '$email')";
    $result = mysqli_query($con, $sql);

    if ($result) {
        //echo "Data Successfully Inserted";
        header('Location:tampilan.php');
    } else {
        die(mysqli_error($con));
    }
}


?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
        crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form method="post">
            <br>
            <div class="formulir">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Isikan Nama Anda" name="nama"><br>
            </div>
            <div class="formulir">
                <label class="form-label">Nama Universitas Anda</label>
                <input type="text" class="form-control" placeholder="Isikan Nama Universitas Anda" name="univ"><br>
            </div>
            <div class="formulir">
                <label class="form-label">Masukkan Jurusan Anda</label>
                <input type="text" class="form-control" placeholder="Masukkan Jurusan Anda" name="jurusan"><br>
            </div>
            <div class="formulir">
                <label class="form-label">Masukkan Nomor Induk Mahasiswa</label>
                <input type="number" class="form-control" placeholder="Masukkan Nomor Induk Mahasiswa Anda" name="npm"><br>
            </div>
            <div class="formulir">
                <label class="form-label">Masukkan Alamat Anda</label>
                <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat"><br>
            </div>
            <div class="formulir">
                <label class="form-label">Masukkan Email Anda</label>
                <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email">
            </div>
            <div class="formulir form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Apakah Data yang anda isikan sudah benar ?</label>
            </div>
            <button type="submit" class="btn btn-primary" name="kirim">kirim</button>
        </form>
    </div>

</body>

</html>