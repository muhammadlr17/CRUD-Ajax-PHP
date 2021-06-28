<?php
    include 'koneksi.php';

    $nrp = $_POST['nrp'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $interest = $_POST['interest'];
    $result['pesan']="";

    if($nrp==""){ 
        $result['pesan']="NRP harus diisi!!";
    }else if($nama==""){
        $result['pesan']="Nama harus diisi!!";
    }else if($email==""){
        $result['pesan']="Email harus diisi!!";
    }else if($interest==""){
        $result['pesan']="Interest tidak boleh kosong!!";
    }else{
        $queryResult= $conn->query("INSERT INTO mahasiswa (nrp,nama,email,interest)
        VALUES ('".$nrp."','".$nama."','".$email."','".$interest."')");

        if($queryResult){
            $result['pesan']="Berhasil disimpan";
        }else{
            $result['pesan']="Gagal disimpan";
        }
    }

    echo json_encode($result);
    
?>