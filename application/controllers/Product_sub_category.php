<?php
/**
 *
 */
class Product_sub_category extends CI_Controller
{

    function __construct(){
      parent::__construct();
      $this->load->library(array('form_validation'));
      $this->load->helper(array('form', 'url'));
      $this->load->model('M_product_sub_category');
    }
    function index(){
      redirect('Product_sub_category/product_sub_category_view');
    }

    function product_sub_category_view(){
      //$data['product_category'] = $this->M_product_category->get_product_category();
      $this->load->view('template/back_admin/admin_head');
      $this->load->view('template/back_admin/admin_navigation');
      $this->load->view('template/back_admin/admin_sidebar');
      $this->load->view('private/product_sub_category/product_sub_category');
      $this->load->view('template/back_admin/admin_foot');
    }
    function get_product_sub_category_json(){

      $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_query();
      // print_r($get_product_category->row());exit();
      $baris = $get_product_sub_category->result();
      $data = array();
      foreach ($baris as $bar) {
        $row = array(
        "ProductSubCategoryCode" => $bar->ProductSubCategoryCode,
        "ProductCategoryCode" => $bar->ProductCategoryCode,
        "ProductCategory" => $bar->ProductCategory,
        "ProductSubCategory" => $bar->ProductSubCategory
        );
        $data[] = $row;
      }
      $output = array(
        "draw" => 0,
        "recordsTotal" => $get_product_sub_category->num_rows(),
        "recordsFiltered" => $get_product_sub_category->num_rows(),
        "data" => $data
      );
      echo json_encode($output);
    }

}

 ?>
