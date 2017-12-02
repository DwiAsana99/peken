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
    $data['product_category'] = $this->M_product_category->get_product_category();
    $this->load->view('private/product_category/product_category',$data);
  }

  function product_category_add_view(){
    $this->load->view('private/product_category/product_category_add');
  }

  function add_product_category_db(){
    $data = array(
			'Category' => $this->input->post('product_category')
		);
		$this->M_product_category->add_product_category_db('tbproductcategory',$data);
		$this->session->set_flashdata('msg', 'Add Product Category successfully ...');
		redirect('Product_category/product_category_view');
  }

  function edit_product_category_view($id){
		$data['data'] = $this->M_product_category->edit_product_category_view($id) ;
		$this->load->view('private/product_category/edit_product_category',$data);
	}

	function edit_product_category_db(){
		$id = $this->input->post('id_category');
		$data = array(
			'Category' => $this->input->post('product_category')

	);
		$this->M_product_category->edit_product_category_db('tbproductcategory',$data,$id) ;
		$this->session->set_flashdata('msg', 'Edit Product Category successfully...');
		redirect('Product_category/product_category_view');
	}
}

?>
