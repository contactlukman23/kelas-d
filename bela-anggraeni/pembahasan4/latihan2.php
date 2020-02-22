<?php

$siswa =['1','0025644570','bella anggraeni','perempuan','sidokerto','08 februari 2003','bella.jpg'];

//var_dump ($siswa[2]);
var_dump ($siswa);
die();

?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa</title>
</head>
<body>

<h1>Daftar Siswa </h1>

<table border ="1px"cellpading ="10px"cellspacing="0px">
	<tr>
		<th> No </th>
		<th>NISN</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Foto</th>
	</tr>
	<tr>
		<td>1</td>
		<td>0025644570</td>
		<td>Bela Anggraeni</td>
		<td>Perempuan</td>
		<td>Sidokerto</td>
		<td>08 Februari 2003</td>
		<td><img src ="images/bela.jpg"widht="75px">
</tr>
</table>

</body>
</html>
			<