<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 class Emailprimasaja extends CI_Controller {
  
  public function index()
  {
   $this->load->helper('form');                             //memasukkan library helper form
   $this->load->view('tampilan_pengiriman');       //memasukkan tampilan view tampilan_pengiriman.php
  }
  
   public function prosespengiriman()
  {
   $this->load->helper(array('form', 'url'));
   $this->load->library('email');
   
   //konfigurasi email
   $config = array();
   $config['charset'] = 'utf-8';
   $config['useragent'] = 'Codeigniter'; //bebas sesuai keinginan kamu
   $config['protocol']= "smtp";
   $config['mailtype']= "html";
   $config['smtp_host']= "ssl://smtp.gmail.com";
   $config['smtp_port']= "465";
   $config['smtp_timeout']= "5";
   $config['smtp_user']= "qatqathrun.qn@gmail.com";              //isi dengan email anda
   $config['smtp_pass']= "rowenaravenclaw";            // isi dengan password dari email anda
   $config['crlf']="\r\n";
   $config['newline']="\r\n";
  
   $config['wordwrap'] = TRUE;

 //memanggil library email dan set konfigurasi untuk pengiriman email
   
   $this->email->initialize($config);
 //konfigurasi pengiriman kotak di view ke pengiriman email di gmail
   $this->email->from($this->input->post('from'));
   $this->email->to($this->input->post('to'));
   $this->email->subject($this->input->post('subject'));
   $this->email->message($this->input->post('isi'));
   
// pernyataan jika pengiriman berhasil atau tidak
  
   if($this->email->send())
   {
    echo "Email Telah terkirim";
   }else
   {
    echo "Email gagal dikirim";
   }
   
  }
 }
?>