<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	Public	 function __construct()
	{
		parent::__construct();
		$this->load->model('Models','m');
		
	}
  public function detail()
	{
		$select = $this->db->select('*');
		$select = $this->db->where('nik', $_GET['nik']);
		$data['bio']=$this->m->Get_All('biodata', $select);

		$this->load->view('admin/detail', $data);
	}
}

