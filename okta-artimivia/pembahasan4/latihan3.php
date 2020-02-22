<?php

$students=[
['1','0032652875','apriliana mayang sari','perempuan','sidokerto','19 april 2003','apriliana.jpg'],
['2','0034514993','Dea setiana wati','Perempuan','tanggerang', '24 September 2003', 'dea.jpg'],
 ['3','0026313106','Fita Nadia','perempuan', 'Jombang','06 september 2002','fita.jpg'],
  ['4','0032655438','Maghfira izzani maulania','Perempuan','purwoadi','04 juni 2003','magfira.jpg'],
  ['5','0036262037','Mella puspita sari','perempuan','liman benawi','11 agustus 2003','mella.jpg'],
  ['6','0026111794','nunung ernawati','perempuan','sidokerto','9 september 2002','nunung.jpg']
];

//var_dump($students);
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
<?php foreach($students as $student):?>
	<tr>

		<td><?php echo $student[0]; ?></td>
		<td><?php echo $student[1]; ?></td>
		<td><?php echo $student[2]; ?></td>
		<td><?php echo $student[3]; ?></td>
		<td><?php echo $student[4]; ?></td>
		<td><?php echo $student[5]; ?></td>
		<td><img src="images/<?php echo $student[6];?>" width="75px"></td>
	</tr>
	<?php endforeach;?>
</table>

</body>
</html>