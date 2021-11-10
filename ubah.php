<?php
    include './koneksi.php';
    $id_buku = $_POST['id_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $id_jenis = $_POST['id_jenis'];
    $gambar_buku = $_POST['gambar_buku'];

    $sql = "UPDATE db_buku SET id_buku= '$id_buku',judul_buku= '$judul_buku',penulis= '$penulis',id_jenis= '$id_jenis',gambar_buku= '$gambar_buku'WHERE id_buku= '$id_buku'";
    if($conn->query($sql)=== TRUE){
        echo "ubah data berhasil <br>";
        echo "<a href= 'tampil.php'>kembali</a><br>";
    }else{
        echo "Error:" . $sql . "<br>" . $conn->error;
    }

    $conn->close();

?>