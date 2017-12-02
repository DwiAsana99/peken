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
    $this->load->model(array('M_captcha','M_member'));
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
      $this->load->view('public/register/register',$cap);
    }
    elseif($this->form_validation->run() == TRUE && $captcha == $word){
      $this->session->unset_userdata('captcha_word');
      $data = array("Email" => $email);
      $this->M_member->add_member($data);
      $this->email->from('marketplacesilver@gmail.com', 'marketplacesilver');
      $this->email->to($email);
      $this->email->subject('Email Konfirmasi Akun');
      $get_member = $this->M_member->get_member(0,"","","","","",$email,"");
      $row = $get_member->row();
      $this->email->message("<a href='".base_url().
      "index.php/Register/new_member_edit_profile_view/".$row->IdMember.
      "'>Verifikasi Akun Anda tes 1</a>"
    );
    $this->email->set_newline("\r\n");
    $this->email->send();
    $this->load->view('public/register/reg_confirm',$email);
    }
  }

  public function new_member_edit_profile_view($id_member){
    $get_member = $this->M_member->get_member(0,"",$id_member);
     $data['user'] = $get_member->result();
    $this->load->view('public/register/new_member_edit_profile',$data);
  }

public function edit_new_member_profile(){
  if ($this->input->post('password')===$this->input->post('c_password')) {
    $data = array('Pwd' => sha1($this->input->post('password')),
    'Location' => $this->input->post('location'),
    'IsSupplier' => $this->input->post('is_supplier'),
    'FirstName' => $this->input->post('first_name'),
    'LastName' => $this->input->post('last_name'),
    'CompanyName' => $this->input->post('company_name'),
    'Phone' => $this->input->post('phone')
  );
  $id_member = $this->input->post('id_member');
  $this->M_member->edit_member($data,$id_member);
  if ($this->input->post('is_supplier')==1) {
    $this->session->set_userdata('id_supplier',$id_member);
    $this->session->set_userdata('company_name',$row->CompanyName);
    $this->session->set_userdata('profil_image',$row->ProfilImage);
  } else {
    $this->session->set_userdata('id_member',$id_member);
    $this->session->set_userdata('company_name',$row->CompanyName);
    $this->session->set_userdata('profil_image',$row->ProfilImage);
  }


  redirect('Supplier/dashboard_supplier_view');
  } else {
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
