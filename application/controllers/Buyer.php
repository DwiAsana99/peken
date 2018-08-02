<?php

class Buyer extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_user','M_product','M_pagination', 'M_product_category', 'M_product_sub_category','M_quotation_detail'));
  }

  
  function buyer_view(){
    $id_admin = $this->session->userdata('id_admin');
    if (empty($id_admin)) {
      redirect('Home/home_view');
    }
    //$data['product_category'] = $this->M_product_category->get_product_category();
    $this->load->view('template/back_admin/admin_head');
    $this->load->view('template/back_admin/admin_navigation');
    $this->load->view('template/back_admin/admin_sidebar');
    $this->load->view('private/buyer/buyer');
    $this->load->view('template/back_admin/admin_foot');
  }
  function get_buyer_json(){

    $get_member = $this->M_user->get_member(0,0);
    // print_r($get_product_category->row());exit();
    $baris = $get_member->result();
    $data = array();
    foreach ($baris as $bar) {
      $row = array(
      "CompanyName" => $bar->CompanyName,
      "Email" => $bar->Email,
      "Phone" => $bar->Phone,
      "Location" => $bar->Location,
      "City" => $bar->City,
      "DetailButton" => '<a   id="id_detail" class="btn btn-info id_detail" ><span class="fa fa-fw fa-search" >
      </span></a>'
      );
      $data[] = $row;
    }
    $output = array(
      "draw" => 0,
      "recordsTotal" => $get_member->num_rows(),
      "recordsFiltered" => $get_member->num_rows(),
      "data" => $data
    );
    echo json_encode($output);
  }


}

?>
