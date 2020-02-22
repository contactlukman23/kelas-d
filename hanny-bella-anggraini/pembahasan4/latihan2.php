<?php

$siswa =['1','0033479035','Hanny Bella Anggraini','Perempuan','Adipuro','29 Juni 2003','hany.jpg'];

//var_dump ($siswa [2]);
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

<table border ="1px cellpading="10px"cellpading="0px">
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
      	<td>003479035</td>
      	<td>Hanny Bella Anggraini</td>
      	<td>Perempuan</td>
      	<td>Adipuro</td>
      	<td>29 Juni 2003</td>
      	<td><img src="images/hany.jpg"width="75px"></td>
      </tr>
  </table>


</body>
</html>