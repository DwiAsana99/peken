<?php
/**
*
*/
class Register extends CI_Controller{

  function __construct(){
    parent::__construct();
    /* Load the libraries and helpers */
    $this->load->library(array('form_validation','email'));
    $this->load->helper(array('form', 'captcha'));
    $this->load->model(array('M_captcha','M_user','M_product_category','M_product_sub_category'));
  }
  public function index(){

    $this->form_validation->set_rules('email', "Email", 'callback_check_email');
    $this->form_validation->set_rules('captcha', "Captcha", 'required');

    $word = $this->session->userdata('captcha_word');
    $captcha = $this->input->post('captcha');
    $email = $this->input->post('email');
    if (
      ($this->form_validation->run() == FALSE)||
      ($this->form_validation->run() == TRUE && $captcha != $word)
    ){
      $cap = $this->M_captcha->generate_captcha();
      $this->session->set_userdata('captcha_word', $cap['word']);
      $get_product_category = $this->M_product_category->get_product_category();
      $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
      $data_nav['product_category'] = $get_product_category->result();
      $data_nav['product_sub_category'] = $get_product_sub_category->result();
      $head_data['page_title'] = "Quotation Detail";
      $this->load->view('template/front/head_front',$head_data);
      $this->load->view('template/front/navigation',$data_nav);
      $this->load->view('public/register/register',$cap);
      $this->load->view('template/front/foot_front');
    }
    elseif($this->form_validation->run() == TRUE && $captcha == $word){
      $this->session->unset_userdata('captcha_word');
      $data = array("Email" => $email);
      $this->M_user->add_member($data);
      $this->email->from('marketplacesilver@gmail.com', 'marketplacesilver');
      $this->email->to($email);
      $this->email->subject('Email Konfirmasi Akun');
      $get_member = $this->M_user->get_member(0,"","","","","",$email,"");
      $row = $get_member->row();
      $this->email->message("<a href='".base_url().
      "index.php/Register/new_member_edit_profile_view/".$row->IdMember.
      "'><i class='glyphicon glyphicon-time'></i>VERIFY YOUR ACCOUNTS</a>"
    );
    $this->email->set_newline("\r\n");
    $this->email->send();
    $get_product_category = $this->M_product_category->get_product_category();
    $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
    $data_nav['product_category'] = $get_product_category->result();
    $data_nav['product_sub_category'] = $get_product_sub_category->result();
    $head_data['page_title'] = "Quotation Detail";
    $data['email'] = $email;
    $this->load->view('template/front/head_front',$head_data);
    $this->load->view('template/front/navigation',$data_nav);
    $this->load->view('public/register/reg_confirm',$data);
    $this->load->view('template/front/foot_front');
  }
}

public function new_member_edit_profile_view($id_member){
  $get_member = $this->M_user->get_member(0,"",$id_member);
  $data['user'] = $get_member->result();
  $get_product_category = $this->M_product_category->get_product_category();
  $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
  $data_nav['product_category'] = $get_product_category->result();
  $data_nav['product_sub_category'] = $get_product_sub_category->result();
  $head_data['page_title'] = "Quotation Detail";
  $this->load->view('template/front/head_front',$head_data);
  $this->load->view('template/front/navigation',$data_nav);
  $this->load->view('public/register/new_member_edit_profile',$data);
  $this->load->view('template/front/foot_front');
}

public function edit_new_member_profile(){
  if ($this->input->post('password')===$this->input->post('c_password')) {
    $data = array('Pwd' => sha1($this->input->post('password')),
    'IsSupplier' => $this->input->post('is_supplier'),
    'FirstName' => $this->input->post('first_name'),
    'LastName' => $this->input->post('last_name'),
    'CompanyName' => $this->input->post('company_name'),
    'Phone' => $this->input->post('phone')
  );
  $id_member = $this->input->post('id_member');
  $this->M_user->edit_member($data,$id_member);
    if ($this->input->post('is_supplier')==1) {
      $this->session->set_userdata('supplier_id',$id_member);
      $this->session->set_userdata('company_name',$row->CompanyName);
      $this->session->set_userdata('profile_image',$row->ProfilImage);
      $this->session->set_userdata('first_name',$row->FirstName);
      redirect('Supplier/dashboard_supplier_view');
    } else {
      $this->session->set_userdata('buyer_id',$id_member);
      $this->session->set_userdata('company_name',$row->CompanyName);
      $this->session->set_userdata('profile_image',$row->ProfilImage);
      $this->session->set_userdata('first_name',$row->FirstName);
      redirect('Home/home_view');
    }

  } else {
    redirect('Home/home_view');
  }
}

public function check_email($str){
  $query = $this->db->get_where("tbmember",array("Email"=>$str));
  if ($query->num_rows() >= 1) {
    $this->form_validation->set_message('check_email', 'Email yang anda masukan sudah terdaftar');
    return FALSE;
  } else {
    return TRUE;
  }
}



}


?>
