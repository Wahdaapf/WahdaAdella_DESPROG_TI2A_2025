<?php
// Lokasi penyimpanan gambar yang diunggah
$targetDirectory = "images/";

// Periksa apakah direktori penyimpanan ada, jika tidak maka buat
if (!file_exists($targetDirectory)) {
    mkdir($targetDirectory, 0777, true);
}

// Ekstensi gambar yang diizinkan
$allowedExtensions = array("jpg", "jpeg", "png", "gif", "webp");

// Ukuran maksimum file (5MB)
$maxSize = 5 * 1024 * 1024;

if ($_FILES['images']['name'][0]) {
    $totalFiles = count($_FILES['images']['name']);
    
    // Loop melalui semua gambar yang diunggah
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['images']['name'][$i];
        $fileTmp = $_FILES['images']['tmp_name'][$i];
        $fileSize = $_FILES['images']['size'][$i];
        $targetFile = $targetDirectory . $fileName;
        
        // Dapatkan ekstensi file
        $fileExtension = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        // Validasi ekstensi dan ukuran file
        if (in_array($fileExtension, $allowedExtensions) && $fileSize <= $maxSize) {
            // Pindahkan file yang diunggah ke direktori penyimpanan
            if (move_uploaded_file($fileTmp, $targetFile)) {
                echo "Gambar $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah gambar $fileName.<br>";
            }
        } else {
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "File $fileName tidak valid. Hanya menerima format: jpg, jpeg, png, gif, webp.<br>";
            } else {
                echo "File $fileName melebihi ukuran maksimum (5MB).<br>";
            }
        }
    }
} else {
    echo "Tidak ada gambar yang diunggah.";
}
?>