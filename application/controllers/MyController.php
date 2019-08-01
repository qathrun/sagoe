<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyController extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('Fungsi_model');
	}
	public function index(){	
		
		$data['reservasi'] = $this->Fungsi_model->ambil_data()->result();
		$data['err_message'] = "";
		$this->session->sess_destroy();
		$this->load->view('login', $data);	
	}
	function read(){
		if($this->session->userdata('akses')){
			$reservasi['reservasi'] = $this->Fungsi_model->ambil_data()->result();
		    $this->load->view('read', $reservasi);
	    }else{
			redirect('MyController');
		}
	}
	function login(){
		$username =$this->input->post('username');
		$password=$this->input->post('pass');
		
		
		$isLogin = $this->Fungsi_model->login_authen($username, $password);
		$i  = $this->Fungsi_model->authen_user($username);
		
		if ($isLogin == true && $i[0]['authentication'] < 3){  //untuk kalo udh lebih 3 kali akun terblock dan otomatis masuk
			$this->session->set_userdata('akses', TRUE);
			redirect('MyController/read');
			//redirect('MyController/read');
		}else {
			if ($i[0]['authentication'] < 3) { 
				$this->Fungsi_model->wrong_password($username, $i[0]['authentication']+1);			
				$data['err_message'] = "GAGAL LOGIN" . ($i[0]['authentication']+1);
				
				$this->load->view('login', $data);
				
			}
			else{
				$data['err_message'] = "AKUN TERBLOCK";
				
				$this->load->view('login', $data);
			}
			
		}
	}
	function logout(){
		redirect('MyController');
	}
	function tambah(){
		$jenis_paket = $this->input->post('jenis_paket');
		$nama = $this->input->post('nama');
		$no_ktp = $this->input->post('no_ktp');
		$tanggal_tampil = $this->input->post('tanggal_tampil');
		$waktu_tampil = $this->input->post('waktu_tampil');
		$lokasi_tampil = $this->input->post('lokasi_tampil');
		$tari_1 = $this->input->post('tari_1');
		$tari_2 = $this->input->post('tari_2');
		$tari_3 = $this->input->post('tari_3');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');
		
		$date = date(c);
		$date = strtotime($date);
		$date = strtotime("+5 hours" ,$date);
		$date = date('20y-m-d H:i:s', $date);
 
		$data = array(
			'tgl_transaksi' => $date,
			'jenis_paket' => $jenis_paket,
			'nama' => $nama,
			'no_ktp' => $no_ktp,
			'tanggal_tampil' => $tanggal_tampil,
			'waktu_tampil' => $waktu_tampil,
			'lokasi_tampil' => $lokasi_tampil,
			'tari_1' => $tari_1,
			'tari_2' => $tari_2,
			'tari_3' => $tari_3,
			'email' => $email,
			'keterangan' => $keterangan
			);
		$this->Fungsi_model->input_data($data,'reservasi');
		redirect('welcome/thanks');
		
	}
	/*function sss(){
		$date = date('y-m-d H:i:s');
		$date = strtotime($date);
		$date = strtotime("+5 hours" ,$date);
		$date = date('20y-m-d H:i:s', $date);
		print_r($date);
	}*/
	
	function tambah_admin(){
		$jenis_paket = $this->input->post('jenis_paket');
		$nama = $this->input->post('nama');
		$no_ktp = $this->input->post('no_ktp');
		$tanggal_tampil = $this->input->post('tanggal_tampil');
		$waktu_tampil = $this->input->post('waktu_tampil');
		$lokasi_tampil = $this->input->post('lokasi_tampil');
		$tari_1 = $this->input->post('tari_1');
		$tari_2 = $this->input->post('tari_2');
		$tari_3 = $this->input->post('tari_3');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');
		
		$date = date(c);
		$date = strtotime($date);
		$date = strtotime("+5 hours" ,$date);
		$date = date('20y-m-d H:i:s', $date);
		
		$data = array(
			'tgl_transaksi' => $date,
			'jenis_paket' => $jenis_paket,
			'nama' => $nama,
			'no_ktp' => $no_ktp,
			'tanggal_tampil' => $tanggal_tampil,
			'waktu_tampil' => $waktu_tampil,
			'lokasi_tampil' => $lokasi_tampil,
			'tari_1' => $tari_1,
			'tari_2' => $tari_2,
			'tari_3' => $tari_3,
			'email' => $email,
			'keterangan' => $keterangan
			);
		$this->Fungsi_model->input_data($data,'reservasi');
		redirect('MyController/read');
		
	}
	function simpan($no_ktp){
		
		$where = array('no_ktp' => $no_ktp);
		$data['reservasi'] = $this->Fungsi_model->simpan_data($where,'reservasi')->result();
		$this->load->view('edit',$data);
	}		

	function hapus($no_ktp){
		$where = array('no_ktp' => $no_ktp);
		$this->Fungsi_model->hapus_data($where,'reservasi');
		redirect('MyController/read');
	}
	function edit($no_ktp){
		if($this->session->userdata('akses')){
		$where = array('no_ktp' => $no_ktp);
		$data['reservasi'] = $this->Fungsi_model->edit_data($where,'reservasi')->result();
		$this->load->view('edit',$data);
		}else{
			redirect('MyController');
		}
	}
	function edit_terima($no_ktp){
		if($this->session->userdata('akses')){
		$where = array('no_ktp' => $no_ktp);
		$data['pindai_terima'] = $this->Fungsi_model->edit_data($where,'pindai_terima')->result();
		$this->load->view('edit_terima',$data);
		}else{
			redirect('MyController/pindai_terima');
		}
	}
	function edit_tolak($no_ktp){
		if($this->session->userdata('akses')){
		$where = array('no_ktp' => $no_ktp);
		$data['pindai_tolak'] = $this->Fungsi_model->edit_data($where,'pindai_tolak')->result();
		$this->load->view('edit_tolak',$data);
		}else{
			redirect('MyController/pindai_tolak');
		}
	}
	function update(){	
		$tgl_transaksi = $this->input->post('tgl_transaksi');
		$jenis_paket = $this->input->post('jenis_paket');
		$nama = $this->input->post('nama');
		$no_ktp = $this->input->post('no_ktp');
		$tanggal_tampil = $this->input->post('tanggal_tampil');
		$waktu_tampil = $this->input->post('waktu_tampil');
		$lokasi_tampil = $this->input->post('lokasi_tampil');
		$tari_1 = $this->input->post('tari_1');
		$tari_2 = $this->input->post('tari_2');
		$tari_3 = $this->input->post('tari_3');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');
		$data = array(		
			'tgl_transaksi' => $tgl_transaksi,
			'jenis_paket' => $jenis_paket,
			'nama' => $nama,
			'no_ktp' => $no_ktp,
			'tanggal_tampil' => $tanggal_tampil,
			'waktu_tampil' => $waktu_tampil,
			'lokasi_tampil' => $lokasi_tampil,
			'tari_1' => $tari_1,
			'tari_2' => $tari_2,
			'tari_3' => $tari_3,
			'email' => $email,
			'keterangan' => $keterangan
			); 

		$where = array(
		'no_ktp' => $no_ktp
	);
 
	$this->Fungsi_model->update_data($where,$data,'reservasi');
	redirect('MyController/read');
	}
	function update_terima(){	
		$tgl_transaksi = $this->input->post('tgl_transaksi');
		$jenis_paket = $this->input->post('jenis_paket');
		$nama = $this->input->post('nama');
		$no_ktp = $this->input->post('no_ktp');
		$tanggal_tampil = $this->input->post('tanggal_tampil');
		$waktu_tampil = $this->input->post('waktu_tampil');
		$lokasi_tampil = $this->input->post('lokasi_tampil');
		$tari_1 = $this->input->post('tari_1');
		$tari_2 = $this->input->post('tari_2');
		$tari_3 = $this->input->post('tari_3');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');
		$pembayaran = $this->input->post('pembayaran');
		$data = array(		
			'tgl_transaksi' => $tgl_transaksi,
			'jenis_paket' => $jenis_paket,
			'nama' => $nama,
			'no_ktp' => $no_ktp,
			'tanggal_tampil' => $tanggal_tampil,
			'waktu_tampil' => $waktu_tampil,
			'lokasi_tampil' => $lokasi_tampil,
			'tari_1' => $tari_1,
			'tari_2' => $tari_2,
			'tari_3' => $tari_3,
			'email' => $email,
			'keterangan' => $keterangan,
			'pembayaran' => $pembayaran
			); 

		$where = array(
		'no_ktp' => $no_ktp
	);
 
	$this->Fungsi_model->update_data($where,$data,'pindai_terima');
	redirect('MyController/view_pindai_terima');
	}
	function update_tolak(){	
		$tgl_transaksi = $this->input->post('tgl_transaksi');
		$jenis_paket = $this->input->post('jenis_paket');
		$nama = $this->input->post('nama');
		$no_ktp = $this->input->post('no_ktp');
		$tanggal_tampil = $this->input->post('tanggal_tampil');
		$waktu_tampil = $this->input->post('waktu_tampil');
		$lokasi_tampil = $this->input->post('lokasi_tampil');
		$tari_1 = $this->input->post('tari_1');
		$tari_2 = $this->input->post('tari_2');
		$tari_3 = $this->input->post('tari_3');
		$email = $this->input->post('email');
		$keterangan = $this->input->post('keterangan');
		$pembayaran = $this->input->post('pembayaran');
		$data = array(		
			'tgl_transaksi' => $tgl_transaksi,
			'jenis_paket' => $jenis_paket,
			'nama' => $nama,
			'no_ktp' => $no_ktp,
			'tanggal_tampil' => $tanggal_tampil,
			'waktu_tampil' => $waktu_tampil,
			'lokasi_tampil' => $lokasi_tampil,
			'tari_1' => $tari_1,
			'tari_2' => $tari_2,
			'tari_3' => $tari_3,
			'email' => $email,
			'keterangan' => $keterangan,
			'pembayaran' => $pembayaran
			); 

		$where = array(
		'no_ktp' => $no_ktp
	);
 
	$this->Fungsi_model->update_data($where,$data,'pindai_tolak');
	redirect('MyController/view_pindai_tolak');
	}

	function basic_admin(){
		if($this->session->userdata('akses')){
				$this->load->view('basic_admin');
		}else{
			redirect('MyController');
		}
	}
	
	function silver_admin(){
		if($this->session->userdata('akses')){
			$this->load->view('silver_admin');
		}else{
			redirect('MyController');
		}
	}
	
	function gold_admin(){
		if($this->session->userdata('akses')){
			$this->load->view('gold_admin');
		}else{
			redirect('MyController');
		}
	}
	
	function platinum_admin(){
		if($this->session->userdata('akses')){
			$this->load->view('platinum_admin');
		}else{
			redirect('MyController');
		}
	}

	function terima($no_ktp){
		if($this->session->userdata('akses')){
		$data['data'] = $this->Fungsi_model->ambil_email($no_ktp);
		$this->load->view('tampilan_pengiriman', $data);
		}else{
			redirect('MyController');
		}
	}
	function tolak($no_ktp){
		if($this->session->userdata('akses')){
		$data['data'] = $this->Fungsi_model->ambil_email($no_ktp);
		$this->load->view('pengiriman_tolak', $data);
		}else{
			redirect('MyController');
		}
	}
	
	function tambah_testimoni(){
		$id = $this->input->post('id');
		$nama_isi = $this->input->post('nama_isi');
		$email_isi = $this->input->post('email_isi');
		$testimoni_isi = $this->input->post('testimoni_isi');
		
		$data = array(
			'id' => $id,
			'nama_isi' => $nama_isi,
			'email_isi' => $email_isi,
			'testimoni_isi' => $testimoni_isi
			);
		$this->Fungsi_model->input_data($data,'testimoni');
		redirect('welcome/thanks_testimoni');	
	}
	
	function read_testimoni(){
		if($this->session->userdata('akses')){
		$testimoni['testimoni'] = $this->Fungsi_model->ambil_testimoni()->result();
		$this->load->view('read_testimoni', $testimoni);
		}else{
			redirect('MyController');
		}
	}
	function hapus_testimoni($id){
		$where = array('id' => $id);
		$this->Fungsi_model->hapus_data($where,'testimoni');
		redirect('MyController/read_testimoni');
	}
	function tambah_upload(){
		$id_penampilan = $this->input->post('id_penampilan');
		$nama_penampilan = $this->input->post('nama_penampilan');
		$gambar = $this->upload->data();
			$gambar = $gambar['file_name'];
		$data = array(
			'id_penampilan' => $id_penampilan,
			'nama_penampilan' => $nama_penampilan,
			);
		$this->Fungsi_model->input_data($data,'penampilan_terbaru');
		redirect('MyController/read_upload');	
	}

	function read_upload(){
		if($this->session->userdata('akses')){
		$read_upload = $this->Fungsi_model->ambil_upload()->result();
		$this->load->view('read_upload', array('read_upload' => $read_upload));
		//print_r($read_upload);
		}else{
			redirect('MyController');
		}
	}
	function hapus_upload($id_penampilan){
		$where = array('id_penampilan' => $id_penampilan);
		$this->Fungsi_model->hapus_data($where,'penampilan_terbaru');
		redirect('MyController/read_upload');
	}
	
	function read_penampilan(){
		//$read_penampilan['penampilan_terbaru'] = $this->Fungsi_model->ambil_upload()->result();
		//$this->load->view('service',$read_penampilan);	
		$data['penampilan_terbaru'] = $this->Fungsi_model->ambil_upload()->result();
		$this->load->view('header');
		$this->load->view('service',$data);	
		$this->load->view('footer');
		//print_r($read_penampilan);
	}
	
	function pindai_terima($no_ktp){
		$reservasi = $this->Fungsi_model->ambil_sesuatu($no_ktp);
		//var_dump($reservasi['tgl_transaksi']);die();
		$data = array(
			'tgl_transaksi' => $reservasi['tgl_transaksi'],
			'jenis_paket' => $reservasi['jenis_paket'],
			'nama' => $reservasi['nama'],
			'no_ktp' => $reservasi['no_ktp'],
			'tanggal_tampil' => $reservasi['tanggal_tampil'],
			'waktu_tampil' => $reservasi['waktu_tampil'],
			'lokasi_tampil' => $reservasi['lokasi_tampil'],
			'tari_1' => $reservasi['tari_1'],
			'tari_2' => $reservasi['tari_2'],
			'tari_3' => $reservasi['tari_3'],
			'email' => $reservasi['email'],
			'keterangan' => $reservasi['keterangan']
			);
		$this->Fungsi_model->input_data($data, 'pindai_terima');
		$this->Fungsi_model->hapus_data($data, 'reservasi');
		//klik view pindaiterima , kecontroller ambil row no.ktp di reservasi, delete/pindahkan data ke db pindai terima, redirect ke halaman read_terima
		$pindai_terima['pindai_terima'] = $this->Fungsi_model->ambil_pindaiterima()->result();
		$this->load->view('pindai_terima', $pindai_terima);
		
	}
	function view_pindai_terima(){
		if($this->session->userdata('akses')){
		$pindai_terima['pindai_terima'] = $this->Fungsi_model->ambil_pindaiterima()->result();
		$this->load->view('pindai_terima', $pindai_terima);
		}else{
			redirect('MyController');
		}
	}
	function pindai_tolak($no_ktp){
		$reservasi = $this->Fungsi_model->ambil_sesuatu($no_ktp);
		//var_dump($reservasi['tgl_transaksi']);die();
		$data = array(
			'tgl_transaksi' => $reservasi['tgl_transaksi'],
			'jenis_paket' => $reservasi['jenis_paket'],
			'nama' => $reservasi['nama'],
			'no_ktp' => $reservasi['no_ktp'],
			'tanggal_tampil' => $reservasi['tanggal_tampil'],
			'waktu_tampil' => $reservasi['waktu_tampil'],
			'lokasi_tampil' => $reservasi['lokasi_tampil'],
			'tari_1' => $reservasi['tari_1'],
			'tari_2' => $reservasi['tari_2'],
			'tari_3' => $reservasi['tari_3'],
			'email' => $reservasi['email'],
			'keterangan' => $reservasi['keterangan']
			);
		$this->Fungsi_model->input_data($data, 'pindai_tolak');
		$this->Fungsi_model->hapus_data($data, 'reservasi');
		$pindai_tolak['pindai_tolak'] = $this->Fungsi_model->ambil_pindaitolak()->result();
		$this->load->view('pindai_tolak', $pindai_tolak);	
	}
	function view_pindai_tolak(){
		if($this->session->userdata('akses')){
		$pindai_tolak['pindai_tolak'] = $this->Fungsi_model->ambil_pindaitolak()->result();
		$this->load->view('pindai_tolak', $pindai_tolak);
		}else{
			redirect('MyController');
		}
	}
	function hapus_terima($no_ktp){
		$where = array('no_ktp' => $no_ktp);
		$this->Fungsi_model->hapus_data($where,'pindai_terima');
		redirect('MyController/view_pindai_terima');
	}
	function hapus_tolak($no_ktp){
		$where = array('no_ktp' => $no_ktp);
		$this->Fungsi_model->hapus_data($where,'pindai_tolak');
		redirect('MyController/view_pindai_tolak');
	}
	function kalender_admin(){
		$this->load->view('kalender_admin');
	}
	function tambah_penampilan(){
		$id_penampilan = $this->input->post('id_penampilan');
		$nama_penampilan = $this->input->post('nama_penampilan');
		$gambar = $this->input->post('gambar');
		
		$data = array(
			'id_penampilan' => $id_penampilan,
			'nama_penampilan' => $nama_penampilan,
			'gambar' => $gambar
			);
		$this->Fungsi_model->input_data($data,'penampilan_terbaru');
		redirect('MyController/penampilan_terbaru');	
	}
	
	
	
}
?>