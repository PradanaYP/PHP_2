<?php
    include './koneksi.php';

    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $id_jenis = $_POST['id_jenis'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "INSERT INTO db_buku (id_buku, judul_buku, penulis, id_jenis, gambar_buku) VALUES ('$id_buku','$judul_buku','$penulis','$id_jenis','$gambar_buku')";

    if($conn->query($sql) === TRUE){
        echo "simpan berhasil <br>";
        echo "<a href='formulir.php'>kembali</a><br>";
    }else{
        echo "error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>