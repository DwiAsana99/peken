<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
    $this->load->model(array('M_product','M_member','M_product_category'));
	}

	function index(){
		redirect('Home/home_view');
	}

	function home_view(){
		$data['product'] = $this->M_product->get_top8_product();
		$data['supplier'] = $this->M_member->get_top10_supplier();
		 $get_product_category = $this->M_product_category->get_product_category();
			$data['product_category'] = $get_product_category->result();
		$this->load->view('public/system/home',$data);
	}


}
