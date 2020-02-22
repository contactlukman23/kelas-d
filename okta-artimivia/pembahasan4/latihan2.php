<?php 

$siswa=['1','0036262037','Mella puspita sari','perempuan','liman benawi','11 agustus 2003','mella.jpg'];

//var_dump ($siswa[1]);
var_dump($siswa);
die();

 ?>







<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
</head>
<body>

<h1>Daftar Siswa</h1>

<table border="1px" cellpadding="10px" cellspacing="0px">
	<tr>
		<th>No</th>
		<th>NISN</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Foto</th>
	</tr>
	<tr>
		<td>1</td>
		<td>0018547362</td>
		<td>Evi Nur Wulandari</td>
		<td>Perempuan</td>
		<td>Madiun</td>
		<td>31 Mei 2001</td>
		<td><img src="images/evi.jpg" width="75px"></td>
	</tr>
</table>

</body>
</html>