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
	function get_product_sub_category_dropdown()  {
		//$rules['filter_value'] =  array('product_category_code' => $product_category_code);
		$this->M_product_category->set_search_product_category();
		$get_product_category = $this->M_product_category->get_product_category();
		$product_category = $get_product_category->result();
	
		$this->M_product_sub_category->set_search_product_sub_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();
		$product_sub_category = $get_product_sub_category->result();
		  foreach($product_category as $pc){
			echo "<li class='dropdown-submenu'>
			<a class='test' tabindex='-1' href='' id='myLink'>".$pc->ProductCategory."<span class='caret'></span></a>
			<ul class='dropdown-menu tes'>";
			foreach($product_sub_category as $psc){
			  if ($pc->Code == $psc->ProductCategoryCode){
			  echo "<li>
				<a tabindex='-1' href='".site_url('Product/public_product_list_view?')."product_sub_category_code=".$psc->Code."'>".
				   $psc->ProductSubCategory."
				</a>
			  </li>";
			  }
			}
			echo "</ul>
		  </li>";
		  }
		  echo "<script>
			document.getElementById('myLink').onclick = function() {
				// do things, and then
				return false;
			};
			</script>";
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
		$get_user = $this->M_user->get_user();
		$data['supplier'] = $get_user->result();



		$this->M_product_category->set_search_product_category();
		$get_product_category = $this->M_product_category->get_product_category();
	
		$this->M_product_sub_category->set_search_product_sub_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();
		
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();

		// if ($this->session->userdata('user_id')) {
		// 	$buyer_id = $this->session->userdata('user_id');
		// 	$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$buyer_id);
		// 	$data['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		// 	$data['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		// }

		$head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
		$this->load->view('public/system/landing_page',$data);
		$this->load->view('template/front/foot_front');
	}


}
?>