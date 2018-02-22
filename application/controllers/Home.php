<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('M_product','M_member','M_product_category', 'M_product_sub_category'));
	}

	function index(){
		redirect('Home/home_view');
	}

	function home_view(){
		$data['product'] = $this->M_product->get_top8_product();
		$data['supplier'] = $this->M_member->get_top10_supplier();
		$get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data['product_category'] = $get_product_category->result();
		$data['product_sub_category'] = $get_product_sub_category->result();

		// if ($this->session->userdata('id_buyer')) {
		// 	$id_buyer = $this->session->userdata('id_buyer');
		// 	$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
		// 	$data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		// 	$data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		// }

		$head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data);
		$this->load->view('public/system/home',$data);
		$this->load->view('template/front/foot_front');
	}


}
