<?php

class Admin extends CI_Controller {


	public function __construct() {
  		parent::__construct();
  		$this->load->helper(array('form', 'url','file'));
		  $this->load->library('session');
	}

	public function index() {
		$this->load->view('admin/login');
	}

	public function proses_login() {
		$this->load->library('session');
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$this->load->model('Admin_model','proses_login');
		$data['log'] = $this->proses_login->login($email,$password);
		$cek = count($data['log']);

		if($cek > 0) {
			$newdata = array(
				'id_pengguna'=> $data['log'][0]['id_pengguna'],
				'nama' => $data['log'][0]['nama'],
				'email' => $data['log'][0]['email'],
				'status' => $data['log'][0]['status']
			);

			$this->session->set_userdata($newdata);

			redirect(base_url().'admin/dashboard');

		} else {

			echo"<h3 align='center'>Ulangi Login</h3>";

		}

	}

	public function dashboard() {

		$t['info'] = $this->session->userdata('nama');
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/dashboard/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}


	public function produk() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','produk');
		$t['produk'] = $this->produk->getallproduk();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/produk/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function tambah_produk() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','pengajar');
		$t['pengguna'] = $this->pengajar->getallpengajar();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/produk/tambah',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function insert_produk() {

	
		$this->load->model('Admin_model','produk');
		$this->produk->insert_produk();
		redirect(base_url('admin/produk'));
	}


	public function edit_produk() {

		$t['info'] = $this->session->userdata('nama');
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','produk');
		$t['produk'] = $this->produk->select_produk($id);
		$t['pengguna'] = $this->produk->getallpengajar();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/produk/edit',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}




	public function update_produk() {

	
		$this->load->model('Admin_model','produk');
		$this->produk->update_produk();
		redirect(base_url('admin/produk'));
	}



	public function mp() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','mp');
		$t['mp'] = $this->mp->getallmp();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/mp/content',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}

	public function logout ()
		{
			$this->session->sess_destroy();
			redirect(base_url('admin'));
		}



	public function tambah_mp() {

		$t['info'] = $this->session->userdata('nama');
		$this->load->model('Admin_model','mp');
		$t['pengguna'] = $this->mp->getallpengajar();
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/mp/tambah_mp',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function insert_mp() {
		$this->load->model('Admin_model','mp');
		$this->mp->insert_mp();
		redirect(base_url('admin/mp'));
	}


	public function edit_mp() {

		$t['info'] = $this->session->userdata('nama');
		$id = $this->uri->segment(3);
		$this->load->model('Admin_model','mp');
		$t['pengguna'] = $this->mp->getallpengajar();
		$t['mp'] = $this->mp->select_mp($id);
		$a['header'] =  $this->load->view('layout/header_backend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_backend',null, true);
		$a['content'] =  $this->load->view('admin/mp/edit_mp',$t, true);
		$page = $this->load->view('layout/layout_backend',$a);
		return $page;
	}



	public function update_mp() {
		$this->load->model('Admin_model','mp');
		$this->mp->update_mp();
		redirect(base_url('admin/mp'));
	}


	
}
