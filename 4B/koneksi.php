<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $nama_db = "pokemon1";
  $pdo = new PDO('mysql:host='.$host.';dbname='.$nama_db, $user, $pass);
  //$koneksi = mysqli_connect($host,$user,$pass,$nama_db); 
  if(!$pdo){ 
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>