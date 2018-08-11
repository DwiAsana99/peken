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
      $this->load->model(array('M_product_sub_category','M_product_category'));
    }
    function index(){
      redirect('Product_sub_category/product_sub_category_view');
    }

    function product_sub_category_view(){
      $admin_id = $this->session->userdata('user_id');
      if (empty($admin_id)) {
        redirect('Home/home_view');
      }
      //$data['product_category'] = $this->M_product_category->get_product_category();
      $this->load->view('template/back_admin/admin_head');
      $this->load->view('template/back_admin/admin_navigation');
      $this->load->view('template/back_admin/admin_sidebar');
      $this->load->view('private/product_sub_category/product_sub_category');
      $this->load->view('template/back_admin/admin_foot');
    }
    function get_product_sub_category_json(){

      $product_sub_category_rules['join']['other_table_columns'] = " ,productsubcategory_tb.Code as ProductSubCategoryCode,productcategory_tb.* ";
      $product_sub_category_rules['join']['join_table'] = "  INNER JOIN productcategory_tb 
      ON productsubcategory_tb.ProductCategoryCode =  productcategory_tb.Code";
      $this->M_product_sub_category->set_search_product_sub_category($product_sub_category_rules);
		  $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();
      // print_r($get_product_category->row());exit();
      $baris = $get_product_sub_category->result();
      $data = array();
      foreach ($baris as $bar) {
        $row = array(
        "ProductSubCategoryCode" => $bar->ProductSubCategoryCode,
        "ProductCategoryCode" => $bar->ProductCategoryCode,
        "ProductCategory" => $bar->ProductCategory,
        "ProductSubCategory" => $bar->ProductSubCategory,
        "EditButton" => '<a class="btn btn-warning"   href="'.base_url("Product_sub_category/product_sub_category_edit_view/").$bar->ProductSubCategoryCode.'">
         <span class="fa fa-fw fa-edit" >
         </span>
        </a>'
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
    function add_product_sub_category(){
      $product_category_code = $this->input->post('product_category_code');
      $product_sub_category = $this->input->post('product_sub_category');
      $product_sub_category_rules['order_by'] = ' Code DESC ';
      $product_sub_category_rules['limit'] = 1;
      $product_sub_category_rules['filter_value'] =  array('product_category_code' => $product_category_code);
      $this->M_product_sub_category->set_search_product_sub_category($product_sub_category_rules);
		  $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();




      //$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_query("",$product_category_code,"ORDER BY ProductSubCategoryCode DESC LIMIT 1");
      $row = $get_product_sub_category->row();
      $anInt = intval(substr($row->Code,2));
      $code_oto = $anInt+1;
      if ($code_oto < 10) {
        $code_oto = "0".$code_oto;
      }
      $code_oto = $product_category_code.$code_oto;
      $data = array(
        'Code' => $code_oto,
        'ProductCategoryCode' => $product_category_code,
        'ProductSubCategory' => $product_sub_category
      );
      $this->M_product_sub_category->add_product_sub_category($data);
      $this->session->set_flashdata('msg', 'Add Product Category successfully ...');
      redirect('Product_sub_category/product_sub_category_view');

      // echo $product_category_code." ".$row->ProductSubCategoryCode;exit();
      // $anInt = intval($row->Code);
      // $code_oto = $anInt+1;
      // if ($code_oto < 10) {
      //   $code_oto = "0".$code_oto;
      // }
      // $data = array(
      //   'Code' => $code_oto,
      //   'ProductCategory' =>
      // );
      // $this->M_product_category->add_product_category_db('tbproductcategory',$data);
      // $this->session->set_flashdata('msg', 'Add Product Category successfully ...');
      // redirect('Product_category/product_category_view');
    }
    function product_sub_category_add_view(){
      $admin_id = $this->session->userdata('user_id');
      if (empty($admin_id)) {
        redirect('Home/home_view');
      }
      $this->M_product_category->set_search_product_category();
		  $get_product_category = $this->M_product_category->get_product_category();
  		$data['product_category'] = $get_product_category->result();
      $this->load->view('template/back_admin/admin_head');
      $this->load->view('template/back_admin/admin_navigation');
      $this->load->view('template/back_admin/admin_sidebar');
      $this->load->view('private/product_sub_category/add_product_sub_category',$data);
      $this->load->view('template/back_admin/admin_foot');
    }

    function product_sub_category_edit_view($code){
      $admin_id = $this->session->userdata('user_id');
      if (empty($admin_id)) {
        redirect('Home/home_view');
      }
      $product_sub_category_rules['join']['other_table_columns'] = " ,productsubcategory_tb.Code as ProductSubCategoryCode,productcategory_tb.* ";
      $product_sub_category_rules['join']['join_table'] = "  INNER JOIN productcategory_tb 
      ON productsubcategory_tb.ProductCategoryCode =  productcategory_tb.Code";
      $product_sub_category_rules['filter_value'] =  array('product_sub_category_code' => $code);
      $this->M_product_sub_category->set_search_product_sub_category($product_sub_category_rules);
		  $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();
      $data['data'] = $get_product_sub_category->result();
      $this->load->view('template/back_admin/admin_head');
      $this->load->view('template/back_admin/admin_navigation');
      $this->load->view('template/back_admin/admin_sidebar');
      $this->load->view('private/product_sub_category/edit_product_sub_category',$data);
      $this->load->view('template/back_admin/admin_foot');
    }
    function get_product_sub_category($product_category_code)  {
    $rules['filter_value'] =  array('product_category_code' => $product_category_code);
    $this->M_product_sub_category->set_search_product_sub_category($rules);
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();
    $product_sub_category = $get_product_sub_category->result();
    $data = array();
    foreach ($product_sub_category as $psc) {
      $row = array(
        'Code' => $psc->Code, 
        'ProductCategoryCode' => $psc->ProductCategoryCode,
        'ProductSubCategory' => $psc->ProductSubCategory
      );
      $data[] = $row;
    }
    echo json_encode($data);
  }

    function edit_product_sub_category(){
      $product_sub_category_code = $this->input->post('product_sub_category_code');
      $data = array('ProductSubCategory' => $this->input->post('product_sub_category'));
      $this->M_product_sub_category->edit_product_sub_category($data,$product_sub_category_code) ;
      $this->session->set_flashdata('msg', 'Edit Product Category successfully...');
      redirect('Product_sub_category/product_sub_category_view');
    }

  }

 ?>
