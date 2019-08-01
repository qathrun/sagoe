<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Fungsi_model');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function home(){
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function aboutus(){
		$this->load->view('header');
		$this->load->view('aboutus');
		$this->load->view('footer');
	}
	public function service(){
		$data['penampilan_terbaru'] = $this->Fungsi_model->ambil_upload()->result();
		$this->load->view('header');
		$this->load->view('service', $data);
		$this->load->view('footer');
	}
	public function pricing(){
		$this->load->view('header');
		$this->load->view('pricing');
		$this->load->view('footer');
	}
	public function contactus(){
		$this->load->view('header');
		$this->load->view('contactus');
		$this->load->view('footer');
	}
	/*public function blog(){
		$this->load->view('header');
		$this->load->view('blog');
	}*/
	public function portfolio(){
		$this->load->view('header');
		$this->load->view('portfolio');
		$this->load->view('footer');
	}
	public function reservasi(){
		$this->load->view('header');
		$data['data']= $this->input->post('jenis');
		$this->load->view('reservasi', $data);
		$this->load->view('footer');
	}
	public function reservasi_silver(){
		$this->load->view('header');
		$data['data']= $this->input->post('jenis');
		$this->load->view('reservasi_silver', $data);
		$this->load->view('footer');
	}
	public function reservasi_gold(){
		$this->load->view('header');
		$data['data']= $this->input->post('jenis');
		$this->load->view('reservasi_gold', $data);
		$this->load->view('footer');
	}
	public function reservasi_platinum(){
		$this->load->view('header');
		$data['data']= $this->input->post('jenis');
		$this->load->view('reservasi_platinum', $data);
		$this->load->view('footer');
	}
	function thanks_testimoni(){
		$this->load->view('header');
		$this->load->view('thanks_testimoni');
		$this->load->view('footer');
	}
	function thanks(){
		$this->load->view('header');
		$this->load->view('thanks');
		$this->load->view('footer');
	}
	
}
?>