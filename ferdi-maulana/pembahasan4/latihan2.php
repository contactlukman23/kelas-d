<?php

$siswa =['1','0030212984','ferdi maulana','laki-laki','liman benawi','26 mei 2003','ferdi.jpg'];

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

<h1>Daftar Siswa</h1>
 
<table border ="1px"cellpadding="10px"cellspacing="0px">
	<tr>
		<th>No</th>
		<th>Nisn</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Foto</th>
	</tr>
	<tr>
		<td>1</td>
		<td>0030212984</td>
		<td>Ferdi Maulana</td>
		<td>Laki-laki</td>
		<td>Liman Benawi</td>
		<td>26 Mei 2003</td>
		<td><img src ="images/ferdi.jpg"width="75px"></td>
	</tr>
    </table>

</body>
</html>

