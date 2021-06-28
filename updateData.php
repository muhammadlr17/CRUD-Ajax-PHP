<?php
    include 'koneksi.php';

    $id = $_POST['id_u'];
    $nrp = $_POST['nrp_u'];
    $nama = $_POST['nama_u'];
    $email = $_POST['email_u'];
    $interest = $_POST['interest_u'];
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
        $queryResult= $conn->query("UPDATE mahasiswa SET nrp='".$nrp."',nama='".$nama."',email='".$email."',interest='".$interest."' WHERE id ='".$id."'");

        if($queryResult){
            $result['pesan']="Berhasil di-update";
        }else{
            $result['pesan']="Gagal di-update";
        }
    }

    echo json_encode($result);
?>