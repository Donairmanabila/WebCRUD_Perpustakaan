<?php
	class model {
		//inisialisasi awal untuk class biasa disebut instansiasi
		//Donah.com
		function __construct(){
			$this->connect = mysqli_connect ("localhost","root", "", "pinjam2");
		}
		function execute($query){
			return mysqli_query($this->connect,$query);
		}
		
		//Menampilkan data di tabel buku
		function selectBook(){
			$query = "select * from buku";
			return $this->execute($query);
		}
		
		//Menampilkan data di tabel buku & pinjam secara inner join
		function selectAll(){
			$query = "select pinjam.id_pinjam,pinjam.kode_buku,buku.judul_buku,pinjam.tgl_pinjam
			from pinjam JOIN buku ON pinjam.kode_buku = buku.kode_buku";
			return $this->execute($query);
		}
		
		//Menampilkan data di tabel pinjam
		function select($id){
			$query = "select * from pinjam where id_pinjam='$id'";
			return $this->execute($query);
		}
		
		
		//Membuat fungsi Create / Input Data
		function insert($kode, $tanggal){
			$query = "insert into pinjam (kode_buku, tgl_pinjam) values ('$kode', '$tanggal')";
			return $this->execute($query);
		}
		
		//Membuat fungsi Delete / Hapus Data
		function delete($id){
			$query ="delete from pinjam where id_pinjam='$id'";
			return $this->execute($query);
		}
		
		//Membuat fungsi Update / Edit Data
		function update($ip, $kode, $tanggal){
			$query = "update pinjam set kode_buku='$kode';
			tgl_pinjam='$tanggal' where pinjam.id_pinjam='$ip'";
			//var_dump($query); die();
			return $this->execute($query);
		}
		
		//Menjalankan fungsi Array coding
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		//Pasangan construct adalah destruct untuk menghapus inisialisasi class pada memori
		function __destruct(){
		}
	}
			
?>