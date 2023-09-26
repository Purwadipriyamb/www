<?php
	include "koneksi.php";
	
	$kode= $_GET['kode'];
	$jurusan= $_POST['jurusan'];
	$harga= $_POST['harga'];
	
	$query=mysql_query("insert into siswa values('$kode','$jurusan','$harga');",
	$connection)or die (mysql_error());
	
	if ($query){
?>	
	<script language="JavaScript">
		document.location='index.php';
	</script>
<?php
	}
?>