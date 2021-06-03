<?php

class User_model extends CI_Model {


	public function __construct()
	{
	parent::__construct();
	$this->load->helper(array('form', 'url','file'));
	}



public function getallslideshows()
{
	$sql = $this->db->query("select * from slideshow")->result_array();
	return $sql;

}


public function getallproduct($limit,$start)
{
	$sql = $this->db->query("select * from product limit ".$limit.", ".$start."");
	return $sql;

}

public function gettotalproducts()
{
	$sql = $this->db->query("select * from product")->num_rows();
	return $sql;

}

public function getallproducts()
{
	$sql = $this->db->query("select * from product")->result_array();
	return $sql;

}


public function getallproductsale()
{
	$sql = $this->db->query("select * from product order by sale desc limit 10")->result_array();
	return $sql;

}



public function select_product($id)
{
	$sql = $this->db->query("select * from product where id_product = '".$id."'")->result_array();
	return $sql;

}


public function image_product($id)
{
	$sql = $this->db->query("select * from image_product where id_product = '".$id."'")->result_array();
	return $sql;

}


public function get_description($id)
{
	$sql = $this->db->query("select * from description where id_product = '".$id."'")->result_array();
	return $sql;

}


public function product_category($id,$limit, $start)
{
	$sql = $this->db->query("select * from product where id_categori = '".$id."' limit ".$limit.", ".$start."");
	return $sql;

}

public function gettotalcategory($id)
{
	$sql = $this->db->query("select * from product where id_categori = '".$id."'")->num_rows();
	return $sql;

}



public function sale_buttom(){

	$sql = $this->db->query("select * from product where sale < 2 ")->result_array();
	return $sql;

}

public function sale_top(){

	$sql = $this->db->query("select * from product where sale > 2 ")->result_array();
	return $sql;

}

public function sale_left(){

	$sql = $this->db->query("select * from product where sale = 0 ")->result_array();
	return $sql;

}


public function product_buttom($id){

	$sql = $this->db->query("select * from product where id_categori = '".$id."' and sale < 2 ")->result_array();
	return $sql;

}

public function product_top($id){

	$sql = $this->db->query("select * from product where id_categori = '".$id."' and  sale > 2 ")->result_array();
	return $sql;

}

public function product_left($id){

	$sql = $this->db->query("select * from product where id_categori = '".$id."' and  sale = 0 ")->result_array();
	return $sql;

}



public function sort_date(){

	$sql = $this->db->query("select * from product order by created_at desc limit 10")->result_array();
	return $sql;

}

public function high_low(){

	$sql = $this->db->query("select * from product order by price desc limit 10")->result_array();
	return $sql;

}

public function low_high(){

	$sql = $this->db->query("select * from product order by price asc limit 10")->result_array();
	return $sql;

}


public function popular(){

	$sql = $this->db->query("select * from product where sale > 1 ")->result_array();
	return $sql;

}

} ?>
