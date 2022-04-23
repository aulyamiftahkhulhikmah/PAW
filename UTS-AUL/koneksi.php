<?php
  $host ="localhost"; //host server
  $user ="root"; //user login phpMyAdmin
  $pass =""; //pass login phpMyAdmin
  $db ="db_aul"; //nama database
  $koneksi = mysqli_connect($host, $user, $pass, $db);
  if(!$koneksi){
      echo "Koneksi gagal";
  }
?>