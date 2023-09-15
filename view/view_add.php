<html>
<head>
	<title>Pinjaman Buku Inner Join</title>
</head>
<body>
	<fieldset>
	<center><b><h3>Data Peminjaman Buku</h3></b></center>
		<form action="" method="POST">
		<div class="form-group" style="margin-bottom: 15px">
			<label for="kode">Kode Buku :</label>
			<select name="pilih">
				<option>--Pilih--</option>
				<?php while ($r = $this->model->fetch($data)) { ?>
				<option value="<?php echo $r[0]; ?>"><?php echo $r[1]; ?><option>
				<?php } ?>
			</select>
		</div>
		<div class="form-group" style="margin-bottom: 15px">
			<label for="tgl">Tanggal Pinjam :</label>
			<input type="date" name="tanggal">
		</div>
		<input type="submit"  name="submit" value="Simpan"/>
	</form>
</fieldset>
</body>
</html>
<?php
	if(isset($_POST['submit'])) { //Jika button submit di klik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();
	}
?>
			
					