<?php

class Home extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('M_product','M_user','M_product_category', 'M_product_sub_category', 'M_quotation', 'M_quotation_detail'));
	}

	function index(){
		redirect('Home/home_view');
	}

	function home_view(){
		$product_rules['limit'] = 8;
		$product_rules['join']['other_table_columns'] = " ,user_tb.*, productpic_tb.* ";
		$product_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN productpic_tb	
		ON product_tb.Id = productpic_tb.ProductId AND user_tb.Id = product_tb.SupplierId ";
		$product_rules['filter_value'] =  array('is_published' => 1);
		$product_rules['group_by'] = ' productpic_tb.ProductId ';
		$this->M_product->set_search_product($product_rules);
		$get_product= $this->M_product->get_product();
		$data['product'] = $get_product->result();
		
		$user_rules['limit'] = 8;
		// $rules['join']['other_table_columns'] = " ,user_tb.*, productpic_tb.* ";
		// $rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN productpic_tb	
		// ON product_tb.Id = productpic_tb.ProductId AND user_tb.Id = product_tb.SupplierId ";
		//$rules['filter_value'] =  array('is_published' => 1);
		//$rules['group_by'] = ' productpic_tb.ProductId ';
		$this->M_user->set_search_user($user_rules);
		$data['supplier'] = $this->M_user->get_user();

		// $get_product_category = $this->M_product_category->get_product_category();
		// $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		// $data['product_category'] = $get_product_category->result();
		// $data['product_sub_category'] = $get_product_sub_category->result();

		// if ($this->session->userdata('id_buyer')) {
		// 	$id_buyer = $this->session->userdata('id_buyer');
		// 	$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$id_buyer);
		// 	$data['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		// 	$data['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		// }

		$head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data);
		$this->load->view('public/system/home',$data);
		$this->load->view('template/front/foot_front');
	}


}
?>