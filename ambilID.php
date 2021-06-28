<?php
    include 'koneksi.php';

    $id = $_POST['id_u'];
    $result=array();

    $queryResult = $conn->query("SELECT * FROM mahasiswa WHERE id=".$id);
    $fetchData = $queryResult->fetch_assoc();
    $result = $fetchData;

    echo json_encode($result);
?>