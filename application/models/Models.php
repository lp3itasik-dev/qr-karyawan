<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * 
 */
class Models extends CI_Model
{
	
	public function Get_All($table,$select)
	{
		$select;
		$query = $this->db->get($table);
		return $query->result();
	}
	public function	 view($table){
		return	$this->db->get($table);
	}

	function Save($data, $table){
		$result=$this->db->insert($table, $data);
		return $result;
	}
	public function Get_Where($where, $table)
	{
		$query = $this->db->get_where($table, $where);
		return $query->result();
	}
	function Get_Page($limit, $start, $table){
        $query = $this->db->get($table, $limit, $start);
        return $query;
    }
	function Update($where, $data, $table){
		$this->db->update($table, $data, $where);
		return $this->db->affected_rows();
	}
	function Update_All($data, $table){
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}
	function Delete($where, $table){
		$result=$this->db->delete($table, $where);
		return $result;
	}
	function Delete_All($table){
		$result=$this->db->delete($table);
		return $result;
	}
	public function get($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('user')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
    public function downloadfile($id){
    	$this->db->where('id_formulir', $id); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('file')->row(); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
  }
  function hariini(){
		$tgl = date('Y-m-d');
		$this->db->like('tgl_pengajuan', $tgl);
		return $this->db->get('pengajuan')->result_array();
	}

function simpan_qr($nama,$link,$image_name){
		$data = array(
			'nama' 		=> $nama,
			'link' 		=> $link,
			'qr_code' 	=> $image_name
		);
		$this->db->insert('qr_code',$data);
	}
    
}
