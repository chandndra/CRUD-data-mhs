<?php
include 'koneksi.php';
?>

<!Doctype html>
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

    <br>
    <div class="container">
        <button class="btn btn-primary"> <a href="user.php" class="text-light">Tambah Pengguna</a>
        </button>
        <table class="table my-4 table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Universitas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">NPM</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">E-Mail</th>
                    <th scope="col">Fitur</th>
                </tr>
            </thead>

            <?php
            $sql = "Select * from  `coba`";
            $result = mysqli_query($con, $sql);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $nama = $row['nama'];
                    $univ = $row['univ'];
                    $jurusan = $row['jurusan'];
                    $npm  = $row['npm'];
                    $alamat = $row['alamat'];
                    $email  = $row['email'];
                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $nama . '</td>
                    <td>' . $univ . '</td>
                    <td>' . $jurusan . '</td>
                    <td>' . $npm . '</td>
                    <td>' . $alamat . '</td>
                    <td>' . $email . '</td>
                    <td>
                    <button class="btn btn-primary"><a href="perbaharui.php? 
                    updid=' . $id . '" class ="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="hapus.php? 
                    hapusid=' . $id . '" class ="text-light">Delete</a></button>
                    </td>
                  </tr>';
                }
            }
            ?>
            <tbody>

    </div>

</body>

</html>