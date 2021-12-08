<?php
    include "koneksi.php";
    $id_user = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pass = md5($_POST['password']);
    $no_hp = $_POST['no_hp'];
    $sql = "INSERT INTO users(id_user, password, nama_lengkap, email, no_hp) 
        VALUES ('$id_user', '$pass', '$nama_lengkap','$email', '$no_hp')";
    $query=mysqli_query($con, $sql);
    mysqli_close($con);
    header('location:tampil_user.php');
?>