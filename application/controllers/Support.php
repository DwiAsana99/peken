<?php
/**
 *
 */
class Support extends CI_Controller{

  function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','pagination'));
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('M_product','M_product_category','M_product_sub_category','M_pagination','M_quotation','M_quotation_detail','M_support'));
	}
  function buyer_request_support(){
    $get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
		if ($this->session->userdata('id_buyer')) {
			$id_buyer = $this->session->userdata('id_buyer');
			$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$id_buyer);
			$data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();
			$data_nav['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		}
    $head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
		$this->load->view('private/support/buyer_request_support');
		$this->load->view('template/front/foot_front');
  }
  function get_support_json(){
    $filter_value = array('id_member' => '15101083', 'support_code' => 'S180924001', 'is_closed' => 0);
    $get_support = $this->M_support->get_support($filter_value);
  //   print_r($get_product_category->row());exit();
  //   $baris = $get_product_category->result();
  //   $data = array();
  //   foreach ($baris as $bar) {
  //     $row = array(
  //     "Code" => $bar->Code,
  //     "ProductCategory" => $bar->ProductCategory,
  //     "EditButton" => '<a class="btn btn-warning"   href="'.base_url("index.php/Product_category/product_category_edit_view/").$bar->Code.'">
  //      <span class="fa fa-fw fa-edit" >
  //      </span>
  //     </a>'
  //     );
  //     $data[] = $row;
  //   }
  //   $output = array(
  //     "draw" => 0,
  //     "recordsTotal" => $get_product_category->num_rows(),
  //     "recordsFiltered" => $get_product_category->num_rows(),
  //     "data" => $data
  //   );
  //   echo json_encode($output);
   }
}

 ?>
