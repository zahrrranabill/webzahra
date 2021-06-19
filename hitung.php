<?php 
include "webcounter.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Menghitung Jumlah Kunjungan Dengan PHP dan TXT</title>
    <style>
        .welcome {
            color:#2F4F4F;
            text-align: center;
        }
    </style>
</head>
<body>

<h1 class="welcome">
 Selamat Datang Anda Adalah Pengunjung</h1>
 <?php 
 echo "Ke - $visitor";
 ?>

</body>
</html>
