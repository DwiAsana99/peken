<?php

class Buyer extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_member','M_product','M_pagination'));
  }

  function buyer_account_view(){
    $id_buyer = $this->session->userdata('id_buyer');
    $get_member = $this->M_member->get_member("",0,$id_buyer);
    $data['user'] = $get_member->result();
    $this->load->view('private/buyer_account/buyer_account',$data);
  }
  public function edit_buyer_account(){
    $id_buyer = $this->session->userdata('id_buyer');
    $data = array(
      'FirstName' => $this->input->post('first_name'),
      'LastName' => $this->input->post('last_name'),
      'CompanyName' => $this->input->post('company_name'),
      'CompanyAddress' => $this->input->post('company_address'),
      'City' => $this->input->post('city'),
      'ZipCode' => $this->input->post('zip_code'),
      'Location' => $this->input->post('location'),
      'Phone' => $this->input->post('phone')
    );
    // print_r($data);exit();
    $this->M_member->edit_member($data,$id_buyer);
    redirect('Buyer/buyer_account_view');
  }


}

?>
