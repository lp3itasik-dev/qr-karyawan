<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	Public	 function __construct()
	{
		parent::__construct();
		$this->load->model('Models','m');

		$select = $this->db->select('*');
		$data['read']=$this->m->Get_All('file', $select);
	}
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
	public function authenticated()
	{ 
		if ($this->uri->segment(1) != 'auth' && $this->uri->segment(1) != '') {
			if (!$this->session->userdata('authenticated')) 
			$this->session->set_flashdata('alert', 'Silahkan Login Terlebih dahulu');
			redirect('Dashboard');
		}
	}
	public function index()
	{
		$select = $this->db->select('*');
	  	$select= $this->db->group_by('pengajuan.nik');
		$data['read']=$this->m->Get_All('pengajuan', $select);
		$data['bulann']="all";
		  $data['tahunn']="all";
		  if(isset($_GET['bulan'])){
		    $select= $this->db->where('tgl_pengajuan >=', $_GET['tahun'].'-'.$_GET['bulan'].'-01');
		    $select= $this->db->where('tgl_pengajuan <=', $_GET['tahun'].'-'.$_GET['bulan'].'-31');
		    $data['bulann']=$_GET['bulan'];
		    $data['tahunn']=$_GET['tahun'];
		  }
		$select= $this->db->group_by('pengajuan.nik');
		$data['read'] = $this->db->get('pengajuan')->result();
		$this->load->view('laporan/index', $data);
		
	}

	public function cetak()
	 {
	  	$select = $this->db->select('*');
	  	$select= $this->db->group_by('pengajuan.nik');
		$data['read'] = $this->m->Get_All('pengajuan','$select');
		  $data['bulann']="all";
		  $data['tahunn']="all";
		  if(isset($_GET['bulan'])){
		    $select= $this->db->where('tgl_pengajuan >=', $_GET['tahun'].'-'.$_GET['bulan'].'-01');
		    $select= $this->db->where('tgl_pengajuan<=', $_GET['tahun'].'-'.$_GET['bulan'].'-31');
		    $data['bulann']=$_GET['bulan'];
		    $data['tahunn']=$_GET['tahun'];
		  }
		$select= $this->db->group_by('pengajuan.nik');
		$data['pengajuan'] = $this->m->Get_All('pengajuan','$select');
	  	$this->load->view('laporan/cetak', $data);  
	 }
}
