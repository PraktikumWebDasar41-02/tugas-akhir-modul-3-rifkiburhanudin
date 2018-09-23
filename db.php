<?php
 $host ="localhost"; //host server default
 $user ="root"; //user login phpMyAdmin
 $pass =""; //password login php MyAdmin
 $db ="database"; //nama database
 
 $conn = mysqli_connect($host, $user, $pass, $db) or die ("Koneksi gagal");
?>