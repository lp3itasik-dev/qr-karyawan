<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logs extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	Public	 function __construct()
	{
		parent::__construct();
		$this->load->model('Models','m');
    
	}
	public function index()
	{    
		$this->load->view('logs/index');
	}

	public function cek_login(){
    $username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
    $password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5
    
    $user = $this->m->get($username); // Panggil fungsi get yang ada di UserModel.php
    if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
      $this->session->set_flashdata('pesan', 'username tidak ditemukan');
       // Buat session flashdata
      redirect('logs'); // Redirect ke halaman login
    }else{
      if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
        $session = array(
          'authenticated'=>true, // Buat session authenticated dengan value true
          'username'=>$user->username,  // Buat session username
          'nama'=>$user->nama, // Buat session nama
          'password'=>$user->password,
          'level'=>$user->level // Buat session role
        );
        $this->session->set_userdata($session); // Buat session sesuai $session
        redirect('Admin/index'); // Redirect ke halaman admin
      }else {
        $this->session->set_flashdata('pesan', 'password salah'); // Buat session flashdata
        redirect('logs'); // Redirect ke halaman login
      }
    }
}
	
	public function logout(){
    $this->session->sess_destroy();
		redirect(base_url());
  }
	
}
