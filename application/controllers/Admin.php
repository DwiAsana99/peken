<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_user','M_product','M_pagination', 'M_product_category', 'M_product_sub_category', 'M_quotation', 'M_quotation_detail'));
  }
  function admin_dashboard_view(){
    $id_admin = $this->session->userdata('id_admin');
    if (empty($id_admin)) {
      redirect('Home/home_view');
    }
    $this->load->view('template/back_admin/admin_head');
    $this->load->view('template/back_admin/admin_navigation');
    $this->load->view('template/back_admin/admin_sidebar');
    $this->load->view('private/admin_dashboard');
    $this->load->view('template/back_admin/admin_foot');
  }

}

?>
