<?php
include "koneksi.php";

$id=$_POST['id_050'];
$nama=$_POST['nama_050'];
$email=$_POST['email_050'];

$sql="UPDATE tbl_050 SET nama_050='$nama',email_050='$email' WHERE id_050=$id";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo "Eksekusi update siswa gagal";
}else{
    echo "Eksekusi update siswa berhasil <br>";
    echo "<a href='siswa.php'>Show data</a>";
}

?>