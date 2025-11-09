<?php
    include "database.php";
    
    // Buat koneksi menggunakan class Database
    $database = new Database();
    $connect = $database->getConnection();

    $username = $_POST['username'];
    $password = $_POST['password'];  // Tanpa MD5

    // Gunakan prepared statement untuk keamanan
    $query = "SELECT * FROM \"user\" WHERE username = :username AND password = :password";
    $stmt = $connect->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    $cek = $stmt->rowCount();

    if($cek > 0){
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    }else{
        echo "Anda gagal login. silahkan " ;?>
        <a href="loginForm.html">Login kembali</a>
    <?php
    }
?>