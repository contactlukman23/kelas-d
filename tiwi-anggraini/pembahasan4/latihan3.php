<?php

$students=[
    ['1','0025644570','bella anggraeni','perempuan','sidokerto','08 februari 2003','bella.jpg'],
    ['2','0042404357','arcella cenitti asrori','perempuan','tempuran','12 oktober 2002','arcella.jpg'],
    ['3','0033479035','Hanny Bella Anggraini','Perempuan','Adipuro','29 Juni 2003','hany.jpg'],
    ['4','0021450197','maulina fitria','perempuan','gunung batin baru','16 mei 2002','maulina.jpg'],
    ['5','0034393721','putri sekar rini','perempuan','trimurjo,bd 10','22 november 2003','putri.jpg'],
    ['6','0032655226','Tiwi anggraini','perempuan','depokrejo','18 maret 2003','tiwi.jpg'],
    ['7','0030212984','ferdi maulana','laki-laki','liman benawi','26 mei 2003','ferdi.jpg']
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

<table border="1px"cellpading="10px"cellspacing="opx">
<tr>
    <th>NO</th>
	<th>NISN</th>
	<th>Nama</th>
	<th>Jenis kelamin</th>
	<th>Tempat lahir</th>
	<th>Tanggal lahir</th>
	<th>Foto</th>
</tr>
<?php foreach ($students as $student):?>
<tr>
    <td><?php echo $student[0];?></td>
    <td><?php echo $student[1];?></td>
    <td><?php echo $student[2];?></td>
    <td><?php echo $student[3];?></td>
    <td><?php echo $student[4];?></td>
    <td><?php echo $student[5];?></td>
    <td><img src="images/<?php echo $student[6];?>"width="75px">
    </td>
    </tr>
    <?php endforeach;?>
    </table>	