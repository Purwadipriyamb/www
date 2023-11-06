<?php
	$nama = $_POST['nama'];
	$pass = $_POST['pass'];
	if($nama=='admin' && $pass=='admin') {
		header("location:admin.php");
	} else if($nama=='siswa' && $pass='smk') {
		header("location:pelajar.php");
	} else
	{
		header("location:index.php");
	}
?>