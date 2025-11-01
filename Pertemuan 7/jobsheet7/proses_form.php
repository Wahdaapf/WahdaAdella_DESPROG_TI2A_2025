<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["name"];
    $email = $_POST["email"];
    
    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
