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
    $id_buyer = $this->session->userdata('id_buyer');
    if (empty($id_buyer)) {
      redirect('Home/home_view');
    }
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
  if ($this->session->userdata('id_buyer')) {
    $id_buyer = $this->session->userdata('id_buyer');
    $get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$id_buyer);
    $data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();
    $data_nav['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
  }
    $head_data['page_title'] = "Dinilaku";
    $data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
	$data['breadcrumb'] .= "<li class='active'>Request for Quotation</li>";
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
    if (empty($id_supplier)) {
      redirect('Home/home_view');
    }
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier);
    $data['quotation'] = $get_quotation->result();
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['unread_quotation'] = $get_quotation->result();
    $data_notification['unread_quotation_num_rows'] = $get_quotation->num_rows();
		$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
		$data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		$data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		$this->load->view('template/back/head_back',$data_notification);
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_quotation_list',$data);
    $this->load->view('template/back/foot_back');
  }
  function supplier_quotation_detail(){
    $id_supplier = $this->session->userdata('id_supplier');
    if (empty($id_supplier)) {
      redirect('Home/home_view');
    }
    $id_quotation = $this->input->get('id_quotation');
    $set_quotation_detail_data = array('IsRead' => 1);
    $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,$id_quotation);
    $set_quotation_data = array('IsRead' => 1);
    $this->M_quotation->update_quotation($set_quotation_data,$id_quotation);
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,$id_quotation);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($id_quotation);
    $data['quotation'] = $get_quotation->result();
    $data['quotation_detail'] = $get_quotation_detail->result();
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['unread_quotation'] = $get_quotation->result();
    $data_notification['unread_quotation_num_rows'] = $get_quotation->num_rows();
		$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
		$data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		$data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
    $this->load->view('template/back/head_back',$data_notification);
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_quotation_detail',$data);
    $this->load->view('template/back/foot_back');
  }
  function buyer_quotation_list(){
    $id_buyer = $this->session->userdata('id_buyer');
    if (empty($id_buyer)) {
      redirect('Home/home_view');
    }
    $get_quotation = $this->M_quotation->get_quotation($id_buyer);
    $data['quotation'] = $get_quotation->result();
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
    if (empty($id_buyer)) {
      redirect('Home/home_view');
    }
    $id_quotation = $this->input->get('id_quotation');
    $set_quotation_detail_data = array('IsRead' => 1);
    $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,$id_quotation);
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
    if ($this->session->userdata('id_buyer')) {
			$id_buyer = $this->session->userdata('id_buyer');
			$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$id_buyer);
			$data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();
			$data_nav['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		}
    $head_data['page_title'] = "Quotation Detail";
    $this->load->view('template/front/head_front',$head_data);
    $this->load->view('template/front/navigation',$data_nav);
    $this->load->view('private/quotation/buyer_quotation_detail',$data);
    $this->load->view('template/front/foot_front');
  }
  function get_quotation_detail_chat(){
    $id_buyer = $this->session->userdata('id_buyer');
    $id_supplier = $this->session->userdata('id_supplier');
    $id_member = !empty($id_buyer) ? $id_buyer : $id_supplier ;
    $id_quotation = $this->input->post('id_quotation');
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($id_quotation,"",0);
    $quotation_detail_all = $get_quotation_detail->result();
    //echo "~".$id_member."~";
    $row = $get_quotation_detail->row();
    // echo "Id Member".$row->IdMember."Id Member";
    // echo $get_quotation_detail->num_rows();exit();
    if ($get_quotation_detail->num_rows() > 0 AND $row->IdMember != $id_member) {
      foreach ($quotation_detail_all as $quotation_detail) {
        if ($quotation_detail->IsRead == 0) {
          $profile_image = $quotation_detail->ProfilImage;
          $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
          echo '<li class="left clearfix"><span class="chat-img pull-left">
            <img src='.base_url('assets/supplier_upload/').$profile_image.' alt="User Avatar" width="45" class="img-circle" />
          </span>
          <div class="chat-body clearfix">
            <div class="header">
            <strong class=" primary-font">'.$quotation_detail->CompanyName.'</strong>
              <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>'.$quotation_detail->DateSend.'</small>
            </div>
            <p>
              '.$quotation_detail->Message.'
            </p>
          </div>
        </li>';
          if ($id_member != $quotation_detail->IdMember) {
            $set_quotation_detail_data = array('IsRead' => 1);
            $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,"",$quotation_detail->IdQuotationDetail);
          }
        }
      }
    }

  }
  function get_unread_quotation_notification_bell()
  {
    $id_supplier = $this->session->userdata('id_supplier');
    $get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
    $unread_quotation_notification_bell = $get_quotation->result();
    $unread_count = $get_quotation->num_rows();
    if ($unread_count > 0) {
      $msg = "You have ".$unread_count." unread quotation";
    } else {
      $msg = "You have not unread quotation ";
    }
    $var = "";
    $var .= "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
      <i class='glyphicon glyphicon-envelope'></i>
      <span class='label label-warning'>".$unread_count."</span>
    </a>
    <ul class='dropdown-menu'>
      <li class='header'>".$msg."</li>
      <li>
        <ul class='menu'>";
        foreach ($unread_quotation_notification_bell as $ucnb) {
          $profile_image = $ucnb->ProfilImage;
          $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
          $var .= "<li>
            <a href=".base_url()."index.php/Quotation/supplier_quotation_detail?id_quotation=".$ucnb->IdQuotation.">
              <div class='pull-left'>
                <img src=".base_url()."assets/supplier_upload/".$profile_image." height='50' width='50' class='img-circle' alt=''>
              </div>
              <h4>
                ".$ucnb->CompanyName."
                <small><i class='fa fa-clock-o'></i>".$ucnb->DateSend."</small>
              </h4>
              <span class='badge' style='background-color:red;'>"."new"."</span> <span class='label label-info'> unread comment</span>
            </a>
          </li>";
        }
        $var .= "</ul>
      </li>
      <li class='footer'><a href='#'>See All Notifications</a></li>
    </ul>";
      echo $var;
  }
  function get_chat_notification_bell(){
    $id_buyer = $this->session->userdata('id_buyer');
    $id_supplier = $this->session->userdata('id_supplier');
    if (!empty($id_supplier)) {
			$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
      $unread_count = $get_unread_qutation_detail->num_rows();
      $unread_chat_notification_bell = $get_unread_qutation_detail->result();
      if ($unread_count > 0) {
        $msg = "You have unread comment in ".$unread_count." quotation";
      } else {
        $msg = "You have not unread comment ";
      }
      $var = "";
      $var .= "<a href='#' class='dropdown-toggle' data-toggle='dropdown'>
        <i class='glyphicon glyphicon-comment'></i>
        <span class='label label-warning'>".$unread_count."</span>
      </a>
      <ul class='dropdown-menu'>
        <li class='header'>".$msg."</li>
        <li>
          <ul class='menu'>";
        foreach ($unread_chat_notification_bell as $ucnb) {
          $profile_image = $ucnb->ProfilImage;
          $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
          $var .= "<li>
            <a href=".base_url()."index.php/Quotation/supplier_quotation_detail?id_quotation=".$ucnb->IdQuotation.">
              <div class='pull-left'>
                <img src=".base_url()."assets/supplier_upload/".$profile_image." height='50' width='50' class='img-circle' alt=''>
              </div>
              <h4>
                ".$ucnb->CompanyName."
              </h4>
              <span class='badge' style='background-color:red;'>".$ucnb->UnreadCount."</span> <span class='label label-info'> unread comment</span>
            </a>
          </li>";
        }
        $var .= "</ul>
      </li>
      <li class='footer'><a href='#'>See All Notifications</a></li>
    </ul>";
      echo $var;
		}
    if (!empty($id_buyer)) {
			$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$id_buyer);
      $unread_count = $get_unread_qutation_detail->num_rows();
      $unread_chat_notification_bell = $get_unread_qutation_detail->result();
      if ($unread_count > 0) {
        $msg = "You have unread comment in ".$unread_count." quotation";
      } else {
        $msg = "You have not unread comment ";
      }
      $var = "";
      $var .= "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><i class='glyphicon glyphicon-comment'></i><span style='' class='badge'>".$unread_count."</span></a>
        <ul class='dropdown-menu notify-drop'>
          <div class='notify-drop-title'>
            <div class='row'>
              <div class='col-md-12 col-sm-6 col-xs-6'>".$msg."</div>
            </div>
          </div>
          <div class='drop-content'>";
        foreach ($unread_chat_notification_bell as $ucnb) {
          $var .= "<li>
                    <a href=".base_url()."index.php/Quotation/buyer_quotation_detail?id_quotation=".$ucnb->IdQuotation.">
                    <div class='col-md-3 col-sm-3 col-xs-3'><div class='notify-img'><img src=".base_url()."assets/supplier_upload/".$ucnb->ProfilImage." height='50' width='50' class='img-circle' alt=''></div></div>
                    <div class='col-md-9 col-sm-9 col-xs-9 pd-l0'>
                      <h5><b>".$ucnb->CompanyName."</b></h5>
                      <hr>
                      <span class='badge' style='background-color:orange;'>".$ucnb->UnreadCount."</span> <span class='label label-info'> unread comment</span>
                    </div>
                  </a>
                </li>";
        }
        $var .= "</div>
        <div class='notify-drop-footer text-center'>
          <a href=''><i class='fa fa-eye'></i> See All Notifications</a>
        </div>
      </ul>";
      echo $var;
		}
    //$data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();

    //exit();
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
    $profile_image = $quotation_detail->ProfilImage;
    $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
    echo '<li class="right clearfix"><span class="chat-img pull-right">
      <img src='.base_url('assets/supplier_upload/').$profile_image.' alt="User Avatar" width="60" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
      <div class="header">
        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'.$date.'</small>
        <strong class="pull-right primary-font">'."Me".'</strong>
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
    // print_r($this->input->post());
    // exit();

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
    $subject = " Request for quotation from "." to buy ".$product_name;
    $data = array(
      'DateSend' => $date,
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
//     if($this->email->send()){
//    //Success email Sent
//    echo $this->email->print_debugger();
// }else{
//    //Email Failed To Send
//    echo $this->email->print_debugger();
// }
    redirect('Home');
 // exit();
  }
}

?>
