<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pages extends CI_Controller {
  public function home(){
    if($this->session->userdata('level') == 'admin'){
      redirect('admin/karyawan');
    }if($this->session->userdata('level') == 'user'){
      redirect('User/index');
    }
  }
}

