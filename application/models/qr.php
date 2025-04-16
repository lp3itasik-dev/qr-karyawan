$nik    	= $this->input->post('nik');
      	$nama    	= $this->input->post('nama');
      	$jabatan    = $this->input->post('jabatan');

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

		$params['data'] = $nik; //data yang akan di jadikan QR CODE
		$params['data'] = $nama;
		$params['data'] = $jabatan;
		$params['level'] = 'H'; //H=High
		$params['size'] = 10;
		$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
		$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

		$this->m->simpan_karyawan($nik,$nama,$jabatan,$image_name); //simpan ke database

    	$this->session->set_flashdata('pesan', 'Data berhasil disimpan!!');
	    
    	redirect(base_url().'admin/karyawan');