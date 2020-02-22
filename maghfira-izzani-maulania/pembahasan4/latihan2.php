<?php 

$siswa = ['1','0032655438','Maghfira izzani maulania','Perempuan','purwoadi','04 juni 2003','magfira.jpg'];

var_dump($siswa[1]);
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