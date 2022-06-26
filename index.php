<?php
include('validasi.php');
?>
<html>
<head>

</head>

<body>
<h1>Menu Aplikasi</h1>
<h3>Selamat datang <?php echo $_SESSION['username']?></h3>
<hr>

<p><a href="matkul">Data Matkul</a></p>
<p><a href="matkul">Data Dosen</a></p>
<p><a href="matkul">Data Jadwal</a></p>
<hr>
<p><a href="logout.php">logut</a></p>
</body>
</html>