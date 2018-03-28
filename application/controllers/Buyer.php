<?php

class Buyer extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_member','M_product','M_pagination', 'M_product_category', 'M_product_sub_category','M_quotation_detail'));
  }

  function buyer_account_view(){
    $id_buyer = $this->session->userdata('id_buyer');
    if (empty($id_buyer)) {
      redirect('Home/home_view');
    }
    $get_member = $this->M_member->get_member("",0,$id_buyer);
    $data['user'] = $get_member->result();
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
		$this->load->view('template/front/navigation', $data_nav);
    $this->load->view('private/buyer_account/buyer_account',$data);
    $this->load->view('template/front/foot_front');
  }
  public function edit_buyer_account(){
    $id_buyer = $this->session->userdata('id_buyer');
    $config['upload_path']   = './assets/supplier_upload/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['overwrite'] = TRUE;
    $config['max_size']      = 1000;
    //$config['max_width']     = 1024;
    //$config['max_height']    = 1000;
    $this->load->library('upload', $config);
    $this->upload->do_upload('profil_image');
    $profil_image_lama = $this->input->post('profil_image_lama');
    $profil_image_file = $this->upload->data();
    if (!empty($profil_image_file['file_name'])){
      $profil_image = $profil_image_file['file_name'];
      $this->session->set_userdata('profil_image',$profil_image);
    }else{
      $profil_image = $profil_image_lama;
    }
    $data = array(
      'FirstName' => $this->input->post('first_name'),
      'LastName' => $this->input->post('last_name'),
      'CompanyName' => $this->input->post('company_name'),
      'CompanyAddress' => $this->input->post('company_address'),
      'City' => $this->input->post('city'),
      'ZipCode' => $this->input->post('zip_code'),
      'Location' => $this->input->post('location'),
      'ProfilImage' => $profil_image,
      'Phone' => $this->input->post('phone')
    );
    // print_r($data);exit();
    $this->M_member->edit_member($data,$id_buyer);
    redirect('Buyer/buyer_account_view');
  }
  function buyer_view(){
    //$data['product_category'] = $this->M_product_category->get_product_category();
    $this->load->view('template/back_admin/admin_head');
    $this->load->view('template/back_admin/admin_navigation');
    $this->load->view('template/back_admin/admin_sidebar');
    $this->load->view('private/buyer/buyer');
    $this->load->view('template/back_admin/admin_foot');
  }
  function get_buyer_json(){

    $get_member = $this->M_member->get_member(0,0);
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
