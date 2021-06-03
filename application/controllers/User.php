<?php

class User extends CI_Controller {

	public function __construct() {
  		parent::__construct();
  		$this->load->helper(array('form', 'url','file'));
			$this->load->library('session');

	}

	public function index() {
	//	$this->load->model('User_model','product');
	//	$t['prod'] = $this->product->products();
	//	$t['slider'] = $this->product->sliders();
		$a['header'] =  $this->load->view('layout/header_frontend',null, true);
		$a['footer'] =  $this->load->view('layout/footer_frontend',null, true);
		$a['content'] =  $this->load->view('home/content',null, true);
		$page = $this->load->view('layout/layout_frontend',$a);
		return $page;
	}

}
