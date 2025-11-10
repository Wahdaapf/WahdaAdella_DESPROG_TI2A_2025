<?php
    session_start();
    include 'koneksi.php';
    include 'csrf.php';

    $id = $_POST['id'];
    $query = "SELECT * FROM anggota WHERE id = :id ORDER BY id DESC";
    $sql = $db1->prepare($query);
    $sql->bindParam(':id', $id, PDO::PARAM_INT);
    $sql->execute();
    $res1 = $sql->fetchAll(PDO::FETCH_ASSOC);

    foreach ($res1 as $row) {
        $h['id'] = $row["id"];
        $h['nama'] = $row["nama"];
        $h['jenis_kelamin'] = $row["jenis_kelamin"];
        $h['alamat'] = $row["alamat"];
        $h['no_telp'] = $row["no_telp"];
    }

    echo json_encode($h);

    $db1 = null;
?>