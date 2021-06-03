<?php

class Admin_model extends CI_Model {


public function __construct()
{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
}


public function login($email,$password)
	{
		$sql = $this->db->query("select * from pengguna where email='".$email."' and password='".$password."'");
		$data = $sql->result_array();
		
		return $data;
	}

//Product

public function getallproduk()
{
	$sql = $this->db->query("select * from produk")->result_array();
	return $sql;

}

public function getallpengajar(){

	$sql = $this->db->query("select * from pengguna where status = 'pengajar'")->result_array();
	return $sql;

}

public function insert_produk(){

	$foto = str_replace(" ","_",$_FILES['foto']['name']);
	$url = base_url('asset/upload/produk/'.$foto);
	if(!empty($foto)) {
		$tujuan_file = realpath(APPPATH.'../asset/upload/produk/');
		$konfigurasi = array(
			'allowed_types'	=> 'jpg|jpeg|png|JPG',
			'upload_path'	=> $tujuan_file,
			'remove_spaces'	=> TRUE,
			'file_name' => $foto
		);

		$this->load->library('upload',$konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'foto'=>$url,
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->insert('produk',$data);
		//print_r($data);

	}else{

		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->insert('produk',$data);
	}

}



public function update_produk(){
	$id = $this->input->post('id_produk');
	$foto = str_replace(" ","_",$_FILES['foto']['name']);
	$url = base_url('asset/upload/produk/'.$foto);
	if(!empty($foto)) {
		$tujuan_file = realpath(APPPATH.'../asset/upload/produk/');
		$konfigurasi = array(
			'allowed_types'	=> 'jpg|jpeg|png|JPG',
			'upload_path'	=> $tujuan_file,
			'remove_spaces'	=> TRUE,
			'file_name' => $foto
		);

		$this->load->library('upload',$konfigurasi);
		$this->upload->do_upload('foto');
		$this->upload->data();

		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'foto'=>$url,
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
	}else{
		$data = array(
			'judul'=>$this->input->post('judul'),
			'keterangan'=>$this->input->post('keterangan'),
			'harga'=>$this->input->post('harga'),
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
	}
}

public function delete_produk($id)
{
	$sql = $this->db->query("delete from produk where id_produk = '".$id."'");
	return $sql;

}


public function select_produk($id)
{
	$sql = $this->db->query("select * from produk where id_produk = '".$id."'")->result_array();
	return $sql;

}


public function convert_id($id){
	$data = $this->db->query("select * from pengguna where id_pengguna = '".$id."'")->result_array();
	return $data[0]['nama'];
}




//Mata Pelajaran


public function getallmp()
{
	$sql = $this->db->query("select * from mata_pelajaran")->result_array();
	return $sql;

}

public function select_mp($id){

	$sql = $this->db->query("select * from mata_pelajaran where id_mp = '".$id."'")->result_array();
	return $sql;

}


public function insert_mp(){
		$data = array(
			'nm_pelajaran'=>$this->input->post('nm_pelajaran'),
			'id_pengguna'=>$this->input->post('id_pengguna')
		);
		$this->db->insert('mata_pelajaran',$data);
	}


public function update_mp(){
	$id = $this->input->post('id_mp');
	$data = array(
		'nm_pelajaran'=>$this->input->post('nm_pelajaran'),
		'id_pengguna'=>$this->input->post('id_pengguna')
	);
	$this->db->where('id_mp',$id);
	$this->db->update('mata_pelajaran',$data);
}
} 
?>
