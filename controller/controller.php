<?php
	//include class model 
include "model/model.php";
	
class controller{
		//variabel public 
		public $model;
		
		//inisialisasi awal untuk class 
		function __construct(){
			$this->model = new model(); 
			//variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, 
			//akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
			include "view/view.php"; //memanggil view.php pada folder view
		}
		
		
		//Membuat fungsi Create / Input Data
		function viewInsert(){
			$data = $this->model->selectBook();
			include "view/view_add.php"; //Menampilkan halaman add data
		}
		
		function insert(){
			$kode = $_POST['pilih'];
			$tanggal = $_POST['tanggal'];
			
			$insert = $this->model->insert($kode, $tanggal);
			header("location:index.php");
		}
		
		//Membuat fungsi Delete / Hapus Data
		function delete($id){
			$delete = $this->model->delete($id);
			header("location:index.php");
		}
		
		//Membuat fungsi Update / Edit Data
		function viewEdit($id){
			$data = $this->model->select($id); //select data mahasiswa dengan nim
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/view_edit.php"; //menampilkan halaman untuk mengedit data
		}
		
		function update(){
			$ip = $_POST['ip'];
			$kode = $_POST['pilih'];
			$tanggal = $_POST['tanggal'];
			
			$update = $this->model->update($ip, $kode, $tanggal);
			
			header("location:index.php");
		}
		
		function __destruct(){
		}
}
	
?>