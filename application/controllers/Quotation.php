<?php
/**
*

*/
class Quotation extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','email'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_date','M_quotation','M_quotation_detail','M_member','M_product','M_pagination','M_product_category','M_product_sub_category'));
  }

  function rfq_view(){
    $id_product = $this->input->get('id_product');
    $id_supplier = $this->input->get('id_supplier');
    $get_product = $this->M_product->get_product("",$id_product);
    $get_supplier = $this->M_member->get_member("",1,$id_supplier);
    $data['product'] = $get_product->result();
    $data['supplier'] = $get_supplier->result();
    $get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
    $head_data['page_title'] = "Dinilaku";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
    $this->load->view('private/quotation/rfq',$data);
    $this->load->view('template/front/foot_front');
  }
  /*
   - rfq_view() diatas digunakan untuk menampilkan halaman request for quotation
   - $this->input->get('id_product'), $this->input->get('id_supplier') digunakan
     untuk mengambil id_product dan id_supplier yang berada pada tombol/hyperlink
     di halaman product detail
   - $this->M_product->get_product("",$id_product) digunakan untuk mencari data
     product berdasarkan id_product.
   - $data['product'] berisi multiple row (beberapa baris) data berdasarkan jumlah gambar
     dari 1 product tunggal.

  */
  function supplier_quotation_list(){
    $id_supplier = $this->session->userdata('id_supplier');
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier);
    $data['quotation'] = $get_quotation->result();
    $this->load->view('template/back/head_back',$data);
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_quotation_list',$data);
    $this->load->view('template/back/foot_back');
  }
  function supplier_quotation_detail(){
    $id_supplier = $this->session->userdata('id_supplier');
    $id_quotation = $this->input->get('id_quotation');
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,$id_quotation);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($id_quotation);
    $data['quotation'] = $get_quotation->result();
    $data['quotation_detail'] = $get_quotation_detail->result();
    $this->load->view('template/back/head_back',$data);
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_quotation_detail',$data);
    $this->load->view('template/back/foot_back');
  }
  function buyer_quotation_list(){
    $id_buyer = $this->session->userdata('id_buyer');
    $get_quotation = $this->M_quotation->get_quotation($id_buyer);
    $data['quotation'] = $get_quotation->result();
    $get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
    $head_data['page_title'] = "Quotation Detail";
    $this->load->view('template/front/head_front',$head_data);
    $this->load->view('template/front/navigation',$data_nav);
    $this->load->view('private/quotation/buyer_quotation_list',$data);
    $this->load->view('template/front/foot_front');
  }
  /*
  - buyer_quotation_list() diatas digunakan menampilkan halaman buyer_quotation_list
    yang berisi daftar quotation yang pernah dilakukan oleh buyer
  */

  function buyer_quotation_detail(){
    $id_buyer = $this->session->userdata('id_buyer');
    $id_quotation = $this->input->get('id_quotation');
    $get_quotation = $this->M_quotation->get_quotation($id_buyer,"",$id_quotation);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($id_quotation);
    $quotation_row = $get_quotation->row();
    $get_product = $this->M_product->get_product("",$quotation_row->IdProduct);
    $data['quotation'] = $get_quotation->result();
    $data['product'] = $get_product->result();
    $data['quotation_detail'] = $get_quotation_detail->result();
    $get_product_category = $this->M_product_category->get_product_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_all();
		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
    $head_data['page_title'] = "Quotation Detail";
    $this->load->view('template/front/head_front',$head_data);
    $this->load->view('template/front/navigation',$data_nav);
    $this->load->view('private/quotation/buyer_quotation_detail',$data);
    $this->load->view('template/front/foot_front');
  }
  function add_quotation_detail(){
    $id_quotation = $this->input->post('id_quotation');
    $id_member = $this->input->post('id_member');
    $message = $this->input->post('message');
    $date = $this->M_date->get_date_sql_format();
    $data = array(
      'IdQuotation' => $id_quotation,
      'IdMember' => $id_member,
      'Message' => $message,
      'DateSend' => $date
    );
    $id_quotation_detail = $this->M_quotation_detail->add_quotation_detail($data);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($id_quotation,$id_quotation_detail);
    $quotation_detail = $get_quotation_detail->row();
    echo '<li class="right clearfix"><span class="chat-img pull-right">
      <img src='.base_url('assets/supplier_upload/').$quotation_detail->ProfilImage.' alt="User Avatar" width="60" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
      <div class="header">
        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'.$date.'</small>
        <strong class="pull-right primary-font">'.$quotation_detail->CompanyName.'</strong>
      </div>
      <p>
        '.$quotation_detail->Message.'
      </p>
    </div>
  </li>';
    // echo '<li class="left clearfix"><span class="chat-img pull-left">
    //   <img src='.base_url('assets/supplier_upload/').$quotation_detail->ProfilImage.' alt="User Avatar" class="img-circle" />
    // </span>
    // <div class="chat-body clearfix">
    //   <div class="header">
    //     <strong class="primary-font">'.$quotation_detail->CompanyName.'</strong> <small class="pull-right text-muted">
    //       <span class="glyphicon glyphicon-time"></span>'.$date.'</small>
    //     </div>
    //     <p>'.$quotation_detail->Message.'</p>
    //   </div>
    // </li>';
  }
  function add_quotation(){
    $id_buyer = $this->session->userdata('id_buyer');
    $supplier_email = $this->input->post('supplier_email');
    $id_supplier = $this->input->post('id_supplier');
    $id_product = $this->input->post('id_product');
    $product_name = $this->input->post('product_name');
    $qty = $this->input->post('qty');
    $message =$this->input->post('message');
    $date = $this->M_date->get_date_sql_format();
    $get_buyer = $this->M_member->get_member(0,0,$id_buyer);
    $buyer = $get_buyer->row();
    $content = "Pemesanan oleh : ".$buyer->FirstName.$buyer->LastName."(".$buyer->Email.") to buy ".$product_name.", qty : ".$qty.$message;
    $subject = "Request for quotation from ".$buyer_name." to buy ".$product_name;
    $data = array(
      'Date' => $date,
      'IdBuyer' => $id_buyer,
      'IdSupplier' => $id_supplier,
      'Subject' => $subject,
      'Content' => $content,
      'IdProduct' => $id_product,
      'Qty' => $qty
    );
    $this->M_quotation->add_quotation($data);
    $this->email->from('marketplacesilver@gmail.com', 'marketplacesilver');
    $this->email->to($supplier_email);
    $this->email->subject($subject);
    $this->email->message($content);
    $this->email->set_newline("\r\n");
    $this->email->send();
    redirect('Home');
  }
}

?>
