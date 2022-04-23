<?php
include "koneksi.php";

$nama=$_POST['nama_050'];
$email=$_POST['email_050'];

$sql="INSERT INTO tbl_050 VALUES (null,'$nama','$email')";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "Eksekusi tambah siswa gagal";
}else{
    echo "Eksekusi tambah siswa berhasil <br>";
    echo "<a href='siswa.php'>Show data</a>";
}

?>