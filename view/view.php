<html>
<head>
	<title>FORM PINJAM BUKU</title> 
	<link rel="SHORTCUT ICON" href="image/donah.ico" >
</head>
	<body>
		<center><b><h3>Data Peminjaman Buku</h3></b></center>
		<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr align="center">
				<td>ID Pinjam</td>
				<td>Kode Buku</td>
				<td>Judul Buku</td>
				<td colspan="2">Aksi</td>
			</tr>
			<?php while($row = $this->model->fetch($data)) {
				echo "
					<tr>
					<td>$row[0]</td>
					<td>$row[1]</td>
					<td>$row[2]</td>
					<td>$row[3]</td>
					<td><a href='index.php?e=$row[0]'>Edit Data</a></td>
<td><a href='index.php?d=$row[0]' onClick=\"return confirm('Hapus Data?')\"\>Hapus Data</a></td>
					</tr>
					";
			}?>
		</table>
		<center><a href='index.php?i=add'>Tambah Data Pinjam</a></center>
</body>
</html>