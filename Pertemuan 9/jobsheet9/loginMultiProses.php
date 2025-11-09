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
    
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if($row['level'] == 1){
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeAdmin.html">Halaman HOME</a>
    <?php
    }else if($row['level'] == 2){
        echo "Anda berhasil login. silahkan menuju "; ?>
        <a href="homeGuest.html">Halaman HOME</a>
    <?php
    }else{
        echo "Anda gagal login. silahkan " ;?>
        <a href="loginForm.html">Login kembali</a>
    <?php
    }
?>