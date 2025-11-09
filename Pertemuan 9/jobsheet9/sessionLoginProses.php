<?php
    include "database.php";

    // Buat koneksi menggunakan class Database
    $database = new Database();
    $connect = $database->getConnection();

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query dengan prepared statement
    $query = "SELECT * FROM \"user\" WHERE username = :username AND password = :password";
    $stmt = $connect->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    $cek = $stmt->rowCount();

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
?>
        Anda Berhasil Login, silahkan menuju
        <a href = "homeSession.php"> Halaman Home </a> <?php
    }else{
?>
        Gagal login, silahkan login lagi
        <a href = "sessionLoginForm.html"> Halaman Login </a> <?php
    }
?>