<?php
/**
*
*/
class Product_category extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation'));
    $this->load->helper(array('form', 'url'));
    $this->load->model('M_product_category');
  }

  function index(){
    redirect('Product_category/product_category_view');
  }

  function product_category_view(){
    //$data['product_category'] = $this->M_product_category->get_product_category();
    $this->load->view('template/back_admin/admin_head');
    $this->load->view('template/back_admin/admin_navigation');
    $this->load->view('template/back_admin/admin_sidebar');
    $this->load->view('private/product_category/product_category');
    $this->load->view('template/back_admin/admin_foot');
  }
  function get_product_category_json()
  {
    $get_product_category = $this->M_product_category->get_product_category();
    // print_r($get_product_category->row());exit();
    $baris = $get_product_category->result();
    $data = array();
    foreach ($baris as $bar) {
      $row = array(
      "Code" => $bar->Code,
      "ProductCategory" => $bar->ProductCategory,
      "EditButton" => '<a class="btn btn-warning"   href="'.base_url("index.php/Product_category/product_category_edit_view/").$bar->Code.'">
       <span class="fa fa-fw fa-edit" >
       </span>
      </a>'
      );
      $data[] = $row;
    }
    $output = array(
      "draw" => 0,
      "recordsTotal" => $get_product_category->num_rows(),
      "recordsFiltered" => $get_product_category->num_rows(),
      "data" => $data
    );
    echo json_encode($output);
  }
  // +++++++++++++++



  function product_category_add_view(){
    $this->load->view('template/back_admin/admin_head');
    $this->load->view('template/back_admin/admin_navigation');
    $this->load->view('template/back_admin/admin_sidebar');
    $this->load->view('private/product_category/add_product_category');
    $this->load->view('template/back_admin/admin_foot');
  }

  function add_product_category(){
    $get_product_category = $this->M_product_category->get_product_category("","ORDER BY Code DESC LIMIT 1");
    $row = $get_product_category->row();
    $anInt = intval($row->Code);
    $code_oto = $anInt+1;
    if ($code_oto < 10) {
      $code_oto = "0".$code_oto;
    }
    $data = array(
      'Code' => $code_oto,
      'ProductCategory' => $this->input->post('product_category')
    );
    $this->M_product_category->add_product_category('tbproductcategory',$data);
    $this->session->set_flashdata('msg', 'Add Product Category successfully ...');
    redirect('Product_category/product_category_view');
  }

  function product_category_edit_view($id){
    $get_product_category = $this->M_product_category->get_product_category($id) ;
    $data['data'] = $get_product_category->result();
    $this->load->view('template/back_admin/admin_head');
    $this->load->view('template/back_admin/admin_navigation');
    $this->load->view('template/back_admin/admin_sidebar');
    $this->load->view('private/product_category/edit_product_category',$data);
    $this->load->view('template/back_admin/admin_foot');
  }

  function edit_product_category(){
    $product_category_code = $this->input->post('product_category_code');
    $data = array('ProductCategory' => $this->input->post('product_category'));
    $this->M_product_category->edit_product_category($data,$product_category_code) ;
    $this->session->set_flashdata('msg', 'Edit Product Category successfully...');
    redirect('Product_category/product_category_view');
  }
}

?>
