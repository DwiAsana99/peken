<?php

class Supplier extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','pagination'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_member','M_product','M_pagination', 'M_product_category', 'M_product_sub_category', 'M_quotation'));
  }
  function dashboard_supplier_view(){
      $id_supplier = $this->session->userdata('id_supplier');
       $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['quotation'] = $get_quotation->result();
		$this->load->view('template/back/head_back',$data_notification);
		$this->load->view('template/back/sidebar_back');
    $this->load->view('private/dashboard_supplier');
     $this->load->view('template/back/foot_back');
  }
  /* function public_supplier_list_view() digunakan untuk menampilkan supplier list
	kepada public (non member, member)*/
  function public_supplier_list_view(){
    //mengambil nilai page dari url
    $page = $this->input->get('per_page');
    $this->M_pagination->set_config("",10,"","","","","");
    /* mengecek apakah nilai dari form pencarian ada atau tidak, jika ada maka
		supplier list akan menampilkan supplier berdasarkan CompanyName*/
    if (!empty($this->input->get('search_value'))) {
      $search_value = $this->input->get('search_value');
      $data['search_value'] = $search_value;
      $get_supplier = $this->M_member->get_member(0,1,"",$search_value);
      $this->M_pagination->set_config(
        "","","","","","","","index.php/Supplier/public_supplier_list_view?search_value=".$search_value,
        $get_supplier->num_rows()
      );
      $config = $this->M_pagination->get_config();
      $offset = $this->M_pagination->get_offset($page);
      $get_supplier = $this->M_member->get_member(0,1,"",$search_value,$offset,$config["per_page"]);
      $data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
	  $data['breadcrumb'] .= "<li class='active'>"."Search for '".$search_value."''</li>";
    }
    else {
      $get_supplier = $this->M_member->get_member(0,1);
      $this->M_pagination->set_config(
        "","","","","","","","index.php/Supplier/public_supplier_list_view",
        $get_supplier->num_rows()
      );
      $config = $this->M_pagination->get_config();
      $offset = $this->M_pagination->get_offset($page);
      $get_supplier = $this->M_member->get_member(0,1,"","",$offset, $config["per_page"]);
    }
    $this->pagination->initialize($config);
    $data['supplier'] = $get_supplier->result();
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );
    $get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
    $head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
    $this->load->view('public/supplier/supplier_list',$data);
    $this->load->view('template/front/foot_front');
  }
  function public_supplier_detail_view(){
    $page = $this->input->get('per_page');
    $id_supplier = $this->input->get('id_supplier');
    $get_product = $this->M_product->get_product($id_supplier,"","","", "","tbproductpic.IdProduct");
    $this->M_pagination->set_config(
      "",15,"","","","","","index.php/Supplier/public_supplier_detail_view?id_supplier=".$id_supplier,
      $get_product->num_rows()
    );
    $config = $this->M_pagination->get_config();
    $offset = $this->M_pagination->get_offset($page);
    $get_product = $this->M_product->get_product($id_supplier,"","",$offset, $config["per_page"],"tbproductpic.IdProduct");
    $get_supplier = $this->M_member->get_member(0,1,$id_supplier);
    $data['product'] = $get_product->result();
    $data['supplier'] = $get_supplier->result();
    $this->pagination->initialize($config);
    $str_links = $this->pagination->create_links();
    $data["links"] = explode('&nbsp;',$str_links );
    $get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
    $head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
    $this->load->view('public/supplier/supplier_detail',$data);
    $this->load->view('template/front/foot_front');
  }

  function supplier_account_view(){
    $id_supplier = $this->session->userdata('id_supplier');
    $get_member = $this->M_member->get_member("",1,$id_supplier);
    $data['user'] = $get_member->result();
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['quotation'] = $get_quotation->result();
		$this->load->view('template/back/head_back',$data_notification);
		$this->load->view('template/back/sidebar_back');
    $this->load->view('private/supplier_account/supplier_account',$data);
    $this->load->view('template/back/foot_back');
  }
  public function edit_supplier_account(){
    $id_supplier = $this->session->userdata('id_supplier');
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
    $this->upload->do_upload('siup');
    $siup_lama = $this->input->post('siup_lama');
    $siup_file = $this->upload->data();
    if (!empty($siup_file['file_name']) AND $siup_file['file_name'] != $profil_image_file['file_name']){
      $siup = $siup_file['file_name'];
    }else{
      $siup = $siup_lama;
    }
    $this->upload->do_upload('tdp');
    $tdp_lama = $this->input->post('tdp_lama');
    $tdp_file = $this->upload->data();
    if (!empty($tdp_file['file_name']) AND $tdp_file['file_name'] != $siup_file['file_name']){
      $tdp = $tdp_file['file_name'];
    }else{
      $tdp = $tdp_lama;
    }
    $data = array(
      'FirstName' => $this->input->post('first_name'),
      'LastName' => $this->input->post('last_name'),
      'CompanyName' => $this->input->post('company_name'),
      'CompanyAddress' => $this->input->post('company_address'),
      'City' => $this->input->post('city'),
      'ZipCode' => $this->input->post('zip_code'),
      'Location' => $this->input->post('location'),
      'Npwp' => $this->input->post('npwp'),
      'ProfilImage' => $profil_image,
      'Siup' => $siup,
      'Tdp' => $tdp
    );
    $this->session->set_userdata('first_name',$this->input->post('first_name'));
    $this->session->set_userdata('company_name',$this->input->post('company_name'));
    // print_r($data);exit();
    $this->M_member->edit_member($data,$id_supplier);
    redirect('Supplier/supplier_account_view');
  }
  public function supplier_upload_siup(){
    $id = $this->session->userdata('id_supplier');
    $config['upload_path']   = './assets/suplier_upload/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['overwrite'] = TRUE;
    $config['max_size']      = 1000;
    //$config['max_width']     = 1024;
    //$config['max_height']    = 1000;
    $this->load->library('upload', $config);
    //$this->upload->do_upload('siup');

    if ( ! $this->upload->do_upload('siup')){
      $status = "error";
      $msg = $this->upload->display_errors();
    }
    else{
      $dataupload = $this->upload->data();
      $status = "success";
      $msg = $dataupload['file_name']." berhasil diupload";
    }
    $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$msg)));
    $siup_lama = $this->input->post('siup_lama');
    $siup =   $this->upload->data('file_name');

    if (!empty($siup)){
      $siup_baru = $siup;
    }else{
      $siup_baru = $siup_lama;
    }
    $data = array('Siup' => $siup_baru);
    $this->M_register->edit_member_db($data,$id);
    //redirect('Suplier/suplier_edit');
  }

  public function suplier_upload_tdp(){
    $id = $this->session->userdata('id_supplier');
    $config['upload_path']   = './assets/suplier_upload/';
    $config['allowed_types'] = 'gif|jpg|png|pdf';
    $config['overwrite'] = TRUE;
    $config['max_size']      = 1000;
    //$config['max_width']     = 1024;
    //$config['max_height']    = 1000;
    $this->load->library('upload', $config);
    //$this->upload->do_upload('tdp');

    if ( ! $this->upload->do_upload('tdp')){
      $status = "error";
      $msg = $this->upload->display_errors();
    }
    else{
      $dataupload = $this->upload->data();
      $status = "success";
      $msg = $dataupload['file_name']." berhasil diupload";
    }
    $this->output->set_content_type('application/json')->set_output(json_encode(array('status'=>$status,'msg'=>$msg)));




    $tdp_lama = $this->input->post('tdp_lama');
    $tdp =   $this->upload->data('file_name');

    if (!empty($tdp)){
      $tdp_baru = $tdp;
    }else{
      $tdp_baru = $tdp_lama;
    }
    $data = array('Tdp' => $tdp_baru);
    $this->M_register->edit_member_db($data,$id);
    //redirect('Suplier/suplier_edit');
  }


}

?>
