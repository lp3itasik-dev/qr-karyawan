
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	Public	 function __construct()
	{
		parent::__construct();
		$this->load->model('Models','m');
		if( $this->session->userdata('authenticated')!=true){
			redirect(base_url());
		}
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
			redirect('Dashboard/index');
		}
	}
	public function index()
	{
		$select = $this->db->select('*');

		$this->load->view('admin/index');
	}

	public function karyawan()
	{
		$select = $this->db->select('*');
		$data['bio']=$this->m->Get_All('biodata', $select);

		$this->load->view('admin/karyawan', $data);
	}

	public function add_karyawan()
	{
		$data=array(
		    'nama'    			=>  $this->input->post('nama'),
		    'nik'    			=>  $this->input->post('nik'),
		    'jabatan'			=>  $this->input->post('jabatan')
		);
		if(!empty($_FILES['foto']['name']))
		{
			$path = 'assets/berkas/foto';
			$name = 'foto';
			$name_file = $this->input->post('nik');
			$upload = $this->_do_upload($path,$name,$name_file);
			$data['foto'] = $upload;
		}
		$this->m->Save($data, 'biodata');

		redirect(base_url().'admin/karyawan');
	}

	public function delete_karyawan()
	{
		$table = 'biodata';
		$where=array(
			'nik'		=>	$_GET['nik']
		);
		$read = $this->m->Get_Where($where, $table);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('pesan1', 'Data Berhasil Dihapus!!');

		redirect(base_url().'admin/karyawan');
	}
	
	public function detail()
	{
		$select = $this->db->select('*');
		$select = $this->db->where('nik', $_GET['nik']);
		$data['bio']=$this->m->Get_All('biodata', $select);

		$this->load->view('admin/detail', $data);
	}

	public function qr_code()
	{
		$select = $this->db->select('*');
		$data['bio']=$this->m->Get_All('biodata', $select);

		$select = $this->db->select('*');
		$data['qr']=$this->m->Get_All('qr_code', $select);

		$this->load->view('admin/qr_code', $data);
	}

	public function add_qr()
	{
		$nama   =  $this->input->post('nama');
		$link   =  $this->input->post('link');
		$this->load->library('ciqrcode'); //pemanggilan library QR CODE

		$config['cacheable']	= true; //boolean, the default is true
		$config['cachedir']		= './assets/'; //string, the default is application/cache/
		$config['errorlog']		= './assets/'; //string, the default is application/logs/
		$config['imagedir']		= './assets/berkas/qr/'; //direktori penyimpanan qr code
		$config['quality']		= true; //boolean, the default is true
		$config['size']			= '1024'; //interger, the default is 1024
		$config['black']		= array(224,255,255); // array, default is array(255,255,255)
		$config['white']		= array(70,130,180); // array, default is array(0,0,0)
		$this->ciqrcode->initialize($config);

		$image_name=$nama.'.png'; //buat name dari qr code sesuai dengan nim

		$params['data'] = $link; //data yang akan di jadikan QR CODE
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		$this->m->simpan_qr($nama,$link,$image_name); //simpan ke database

    	$this->session->set_flashdata('pesan', 'Data berhasil disimpan!!');
	    
    	redirect(base_url().'admin/qr_code');
	}

	public function delete_qr()
	{
		$table = 'qr_code';
		$where=array(
			'id_qr'		=>	$_GET['id_qr']
		);
		$read = $this->m->Get_Where($where, $table);
		$this->m->Delete($where, $table);

		$this->session->set_flashdata('pesan1', 'Data Berhasil Dihapus!!');

		redirect(base_url().'admin/qr_code');
	}

	private function _do_upload($path,$name,$name_file){
		$config['upload_path']          = $path;
        $config['allowed_types']        = 'jpg|png|jpeg';
        $config['max_size']             = 2048; //set max size allowed in Kilobyte
        $config['max_width']            = 5000; // set max width image allowed
        $config['max_height']           = 5000; // set max height allowed
        $config['file_name']            = $name_file;//round(microtime(true) * 1000); //just milisecond timestamp fot unique name
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!$this->upload->do_upload($name)) //upload and validate
        {
           $data['inputerror'][] = $name;
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data);
			exit();
		}
		return $this->upload->data('file_name');
	}			

}
