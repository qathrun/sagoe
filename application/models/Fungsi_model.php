<?php 
 
class Fungsi_model extends CI_Model{
	
	function ambil_data(){
		return $this->db->get('reservasi');
	}
	
	function ambil_pindaiterima(){
		return $this->db->get('pindai_terima');
	}
	function ambil_pindaitolak(){
		return $this->db->get('pindai_tolak');
	}
	function login_authen($username, $password) {
		//$this->db->select('*'); //querybuilder
		$sql= "select * from admin where username= '$username' and password = '$password' "; //query native/biasa
		$query = $this->db->query($sql);
		
		if ($query->num_rows()==1) {
			return true;
			
		} else {
			return false;
		}
		
	}
	function authen_user($username){
		$sql = "select authentication from admin where username= '$username'";
		$query = $this->db->query($sql);
		
		if($query->num_rows()==1){
			return $query->result_array();
		}
		else{
			return false;
		}
	}
	function wrong_password($username, $value){
		$sql = "update admin set authentication = $value where username = '$username'";
		$query = $this->db->query($sql);
	}
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function simpan_data($where,$table){
	
	return $this->db->get_where($table,$where);
	}
	
	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
}

	/*public function delete_data($no_ktp){
		return $this->db->delete('reservasi', array('no_ktp'=>no_ktp));
	}
	public function delete($no_ktp){
		return $this->db->query("DELETE FROM reservasi WHERE no_ktp = $no_ktp");
	}*/
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function ambil_email($no_ktp){
		return $this->db->query("SELECT * FROM reservasi WHERE no_ktp='$no_ktp'")->result_array();
	}
	
	function ambil_sesuatu($no_ktp){
		return $this->db->query("SELECT * FROM reservasi WHERE no_ktp='$no_ktp'")->row_array();
	}
	
	function ambil_testimoni(){
		return $this->db->get('testimoni');
	}
	function ambil_upload(){
		return $this->db->get('penampilan_terbaru');
		//return $this->db->query("SELECT * FROM penampilan_terbaru WHERE id_penampilan='$id_penampilan'")->result_array();
	}

	
	
	
}
?>