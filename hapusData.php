<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $conn->query("DELETE FROM mahasiswa WHERE id=".$id);
    
?>