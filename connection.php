<?php
  $dbhost= "127.0.0.1";
  $dbUser = "hanhnd" ;
  $dbPass ="hanhnd";
  $dbName ="web";
  $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
  if($conn){
    $setLang=mysqli_query($conn,"SET NAMES 'utf-8'");
  }else{
    die("kết nối thất bại".mysqli_connect_error());
  }
?>