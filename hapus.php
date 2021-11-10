<?php
    include './koneksi.php';
    $id_buku = $_GET['id_buku'];
    
    $sql = "DELETE FROM db_buku WHERE id_buku='$id_buku'";

    if ($conn->query($sql) === TRUE){
        echo "data berhasil dihapus<br>";
        echo "<a href= 'tampil.php'>kembali</a><br>";
    }else{
        echo "Error: " . $sql . "<br>". $conn->error;
    }
    $conn->close();
?>