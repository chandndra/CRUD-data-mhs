<?php

include 'koneksi.php';
if(isset($_GET['hapusid'])){
    $id=$_GET['hapusid'];

    $sql="delete from `coba` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Berhasil Dihapus";
        header('location:tampilan.php');
    }else{
        die(mysqli_error($con));
    }
}

?>