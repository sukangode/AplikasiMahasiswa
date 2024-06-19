<?php
include "koneksi.php";

if(isset($_POST["proses"])){
    $npm = $_POST['npm'];
    $nama_mhs = $_POST['input1'];
    $prodi_mhs = $_POST['input2'];
    $proses = mysqli_query($db, "INSERT INTO mahasiswa (npm,nama_mhs, kelas_mhs) VALUES ('$npm','$nama_mhs', '$kelas_mhs')") or die(mysqli_error($db));
    $huruf_mutu = '';
    
    if($proses){
        echo "<script>alert('sukses')</script>";
    } else {
        echo "<script>alert('gagal')</script>";
    }


    
header("Location: form3.php");
}
?>
