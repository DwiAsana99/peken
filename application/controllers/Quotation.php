<?php
/**
*

*/
class Quotation extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->library(array('form_validation','email'));
    $this->load->helper(array('form', 'url'));
    $this->load->model(array('M_date','M_quotation','M_quotation_detail','M_user','M_product','M_pagination','M_product_category','M_product_sub_category'));
  }

  function rfq_view(){
    $user_id = $this->session->userdata('user_id');
    $user_level = $this->session->userdata('user_level');
    if (empty($user_id) || ($user_level != 2 && $user_level != 3)) {
      redirect('Home/home_view');
    }

    $product_id = $this->input->get('product_id');
    $supplier_id = $this->input->get('supplier_id');
    $product_rules['join']['other_table_columns'] = " ,user_tb.*, productpic_tb.*, productcategory_tb.*, productsubcategory_tb.* ";
		$product_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN productpic_tb INNER JOIN productcategory_tb INNER JOIN productsubcategory_tb
		ON product_tb.Id = productpic_tb.ProductId
		AND user_tb.Id = product_tb.SupplierId
		AND product_tb.ProductSubCategoryCode = productsubcategory_tb.Code
		AND productcategory_tb.Code = productsubcategory_tb.ProductCategoryCode";
		$product_rules['filter_value'] =  array('product_id' => $product_id);
		$product_rules['group_by'] = ' productpic_tb.ProductId ';
		$this->M_product->set_search_product($product_rules);
    $user_rules['filter_value'] =  array('user_id'=>$supplier_id);
    $this->M_user->set_search_user($user_rules);

    $get_supplier = $this->M_user->get_user();
    $get_product = $this->M_product->get_product();
		$data['product'] = $get_product->result();
    $data['supplier'] = $get_supplier->result();

    $this->M_product_category->set_search_product_category();
		$get_product_category = $this->M_product_category->get_product_category();

		$this->M_product_sub_category->set_search_product_sub_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();

		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();

    // if ($this->session->userdata('user_id')) {
    //   $buyer_id = $this->session->userdata('user_id');
    //   $get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$buyer_id);
    //   $data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();
    //   $data_nav['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
    // }
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
   - $this->input->get('product_id'), $this->input->get('supplier_id') digunakan
     untuk mengambil product_id dan supplier_id yang berada pada tombol/hyperlink
     di halaman product detail
   - $this->M_product->get_product("",$product_id) digunakan untuk mencari data
     product berdasarkan product_id.
   - $data['product'] berisi multiple row (beberapa baris) data berdasarkan jumlah gambar
     dari 1 product tunggal.
  */
  function supplier_quotation_list(){
    $user_id = $this->session->userdata('user_id');
    $user_level = $this->session->userdata('user_level');
    if (empty($user_id) || ($user_level != 1 && $user_level != 3)) {
      $this->session->sess_destroy();
      redirect('Home/home_view');
    }

    $quotation_rules['join']['other_table_columns'] = " ,user_tb.*, product_tb.* ";
		$quotation_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN product_tb
		ON quotation_tb.BuyerId = user_tb.Id
    AND quotation_tb.ProductId = product_tb.Id ";
    $quotation_rules['filter_value'] =  array('supplier_id' => $user_id);
		$this->M_quotation->set_search_quotation($quotation_rules);
    $get_quotation = $this->M_quotation->get_quotation();
    $data['quotation'] = $get_quotation->result();

    // $get_quotation = $this->M_quotation->get_quotation("",$supplier_id);
    // $data['quotation'] = $get_quotation->result();
    // $get_quotation = $this->M_quotation->get_quotation("",$supplier_id,"",0);
		// $data_notification['unread_quotation'] = $get_quotation->result();
    // $data_notification['unread_quotation_num_rows'] = $get_quotation->num_rows();
		// $get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($supplier_id);
		// $data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		// $data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		$this->load->view('template/back/head_back');
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_quotation_list',$data);
    $this->load->view('template/back/foot_back');
  }
  function supplier_quotation_detail(){
    $user_id = $this->session->userdata('user_id');
    $user_level = $this->session->userdata('user_level');
    if (empty($user_id) || ($user_level != 1 && $user_level != 3)) {
      $this->session->sess_destroy();
      redirect('Home/home_view');
    }

    $quotation_code = $this->input->get('quotation_code');
    $set_quotation_data = array('IsRead' => 1);
    $this->M_quotation->update_quotation($set_quotation_data,$quotation_code);

    $unread_quotation_detail_rules['join']['other_table_columns'] = " , user_tb.Id AS UserId,  quotationdetail_tb.Id AS QuotationDetailId, user_tb.*  ";
    $unread_quotation_detail_rules['join']['join_table'] = " INNER JOIN user_tb
    ON user_tb.Id = quotationdetail_tb.MemberId  ";
    $unread_quotation_detail_rules['filter_value'] =  array('quotation_code' => $quotation_code, 'is_read' => 0);
    $this->M_quotation_detail->set_search_quotation_detail($unread_quotation_detail_rules);
    $get_unread_quotation_detail = $this->M_quotation_detail->get_quotation_detail();
    $get_unread_quotation_detail_all = $get_unread_quotation_detail->result();
    if ($get_unread_quotation_detail->num_rows() > 0 ) {
      foreach ($get_unread_quotation_detail_all as $unread_quotation_detail) {
        $set_quotation_detail_data = array('IsRead' => 1);
        $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,"",$unread_quotation_detail->QuotationDetailId);
      }
    }


    //$quotation_code = $this->input->get('quotation_code');
    // $set_quotation_detail_data = array('IsRead' => 1);
    // $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,$quotation_id);

    //$get_quotation = $this->M_quotation->get_quotation($user_id,"",$quotation_id);
    $quotation_rules['filter_value'] =  array('supplier_id' => $user_id, 'quotation_code'=>$quotation_code);
		$this->M_quotation->set_search_quotation($quotation_rules);
    $get_quotation = $this->M_quotation->get_quotation();
    // mencegah supplier lain mengakses halaman quotation detail supplier lain
    if ($get_quotation->num_rows() == 0) {
			redirect('Quotation/supplier_quotation_list');
		}

    $this->M_quotation_detail->set_search_quotation_detail();// memastikan untuk bersih
    $quotation_detail_rules['join']['other_table_columns'] = " , user_tb.*  ";
		$quotation_detail_rules['join']['join_table'] = " INNER JOIN user_tb
		ON user_tb.Id = quotationdetail_tb.MemberId  ";
    $quotation_detail_rules['filter_value'] =  array('quotation_code' => $quotation_code, 'is_read' => 1);
    $quotation_detail_rules['order_by'] =  " quotationdetail_tb.SendDate ASC ";
    // echo "<pre>";
		// print_r($quotation_detail_rules);
		// echo "</pre>";exit();
		$this->M_quotation_detail->set_search_quotation_detail($quotation_detail_rules);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail();

    //$get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($quotation_id);
    $quotation_row = $get_quotation->row();
    $product_rules['join']['other_table_columns'] = " , product_tb.Id AS ProductId, user_tb.* , productcategory_tb.*, productsubcategory_tb.* ";
		$product_rules['join']['join_table'] = " INNER JOIN user_tb  INNER JOIN productcategory_tb INNER JOIN productsubcategory_tb
		ON user_tb.Id = product_tb.SupplierId
		AND product_tb.ProductSubCategoryCode = productsubcategory_tb.Code
		AND productcategory_tb.Code = productsubcategory_tb.ProductCategoryCode";
		$product_rules['filter_value'] =  array('product_id' => $quotation_row->ProductId);
		$this->M_product->set_search_product($product_rules);
    $get_product = $this->M_product->get_product();

    $product_pic_rules['filter_value'] =  array('product_id'=>$quotation_row->ProductId);
		$this->M_product->set_search_product_pic($product_pic_rules);
		$get_product_pic = $this->M_product->get_product_pic();
    // $get_product = $this->M_product->get_product("",$quotation_row->IdProduct);

    $data['quotation'] = $get_quotation->result();
    $data['product'] = $get_product->result();
    $data['product_pic'] = $get_product_pic->result();
    $data['quotation_detail'] = $get_quotation_detail->result();

    $this->load->view('template/back/head_back');
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_quotation_detail',$data);
    $this->load->view('template/back/foot_back');
  }
  function buyer_quotation_list(){
    $user_id = $this->session->userdata('user_id');
    $user_level = $this->session->userdata('user_level');
    if (empty($user_id) || ($user_level != 2 && $user_level != 3)) {
      $this->session->sess_destroy();
      redirect('Home/home_view');
    }

    $quotation_rules['join']['other_table_columns'] = " ,user_tb.*, product_tb.* ";
		$quotation_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN product_tb
		ON quotation_tb.BuyerId = user_tb.Id
    AND quotation_tb.ProductId = product_tb.Id ";
    $quotation_rules['filter_value'] =  array('buyer_id' => $user_id);
		$this->M_quotation->set_search_quotation($quotation_rules);
    $get_quotation = $this->M_quotation->get_quotation();
    $data['quotation'] = $get_quotation->result();
    $this->M_product_category->set_search_product_category();
		$get_product_category = $this->M_product_category->get_product_category();

		$this->M_product_sub_category->set_search_product_sub_category();
		$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();

		$data_nav['product_category'] = $get_product_category->result();
		$data_nav['product_sub_category'] = $get_product_sub_category->result();
    // if ($this->session->userdata('user_id')) {
		// 	$user_id = $this->session->userdata('user_id');
		// 	$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$user_id);
		// 	$data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		// 	$data_nav['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		// }
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

  function buyer_quotation_detail($quotation_code){
    $user_id = $this->session->userdata('user_id');
    $user_level = $this->session->userdata('user_level');
    if (empty($user_id) || ($user_level != 2 && $user_level != 3)) {
      $this->session->sess_destroy();
      redirect('Home/home_view');
    }

    //$quotation_code = $this->input->get('quotation_code');
    $set_quotation_data = array('IsRead' => 1);
    $this->M_quotation->update_quotation($set_quotation_data,$quotation_code);

    $unread_quotation_detail_rules['join']['other_table_columns'] = " , user_tb.Id AS UserId,  quotationdetail_tb.Id AS QuotationDetailId, user_tb.*  ";
    $unread_quotation_detail_rules['join']['join_table'] = " INNER JOIN user_tb
    ON user_tb.Id = quotationdetail_tb.MemberId  ";
    $unread_quotation_detail_rules['filter_value'] =  array('quotation_code' => $quotation_code, 'is_read' => 0);
    $this->M_quotation_detail->set_search_quotation_detail($unread_quotation_detail_rules);
    $get_unread_quotation_detail = $this->M_quotation_detail->get_quotation_detail();
    $get_unread_quotation_detail_all = $get_unread_quotation_detail->result();
    if ($get_unread_quotation_detail->num_rows() > 0 ) {
      foreach ($get_unread_quotation_detail_all as $unread_quotation_detail) {
        $set_quotation_detail_data = array('IsRead' => 1);
        $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,"",$unread_quotation_detail->QuotationDetailId);
      }
    }
    // $set_quotation_detail_data = array('IsRead' => 1);
    // $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,$quotation_id);

    //$get_quotation = $this->M_quotation->get_quotation($user_id,"",$quotation_id);
    $quotation_rules['filter_value'] =  array('buyer_id' => $user_id, 'quotation_code'=>$quotation_code);
		$this->M_quotation->set_search_quotation($quotation_rules);
    $get_quotation = $this->M_quotation->get_quotation();
    // mencegah supplier lain mengakses halaman quotation detail supplier lain
    if ($get_quotation->num_rows() == 0) {
			redirect('Quotation/buyer_quotation_list');
		}
    $this->M_quotation_detail->set_search_quotation_detail();// memastikan untuk bersih
    $quotation_detail_rules['join']['other_table_columns'] = " , user_tb.*  ";
		$quotation_detail_rules['join']['join_table'] = " INNER JOIN user_tb
		ON user_tb.Id = quotationdetail_tb.MemberId  ";
    $quotation_detail_rules['filter_value'] =  array('quotation_code' => $quotation_code, 'is_read' => 1);
    $quotation_detail_rules['order_by'] =  " quotationdetail_tb.SendDate ASC ";

		$this->M_quotation_detail->set_search_quotation_detail($quotation_detail_rules);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail();

    //$get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($quotation_id);
    $quotation_row = $get_quotation->row();
    $product_rules['join']['other_table_columns'] = " , product_tb.Id AS ProductId, user_tb.* , productcategory_tb.*, productsubcategory_tb.* ";
		$product_rules['join']['join_table'] = " INNER JOIN user_tb  INNER JOIN productcategory_tb INNER JOIN productsubcategory_tb
		ON user_tb.Id = product_tb.SupplierId
		AND product_tb.ProductSubCategoryCode = productsubcategory_tb.Code
		AND productcategory_tb.Code = productsubcategory_tb.ProductCategoryCode";
		$product_rules['filter_value'] =  array('product_id' => $quotation_row->ProductId);
		$this->M_product->set_search_product($product_rules);
    $get_product = $this->M_product->get_product();

    $product_pic_rules['filter_value'] =  array('product_id'=>$quotation_row->ProductId);
		$this->M_product->set_search_product_pic($product_pic_rules);
		$get_product_pic = $this->M_product->get_product_pic();
    // $get_product = $this->M_product->get_product("",$quotation_row->IdProduct);

    $data['quotation'] = $get_quotation->result();
    $data['product'] = $get_product->result();
    $data['product_pic'] = $get_product_pic->result();
    $data['quotation_detail'] = $get_quotation_detail->result();

    $this->M_product_category->set_search_product_category();
    $get_product_category = $this->M_product_category->get_product_category();

    $this->M_product_sub_category->set_search_product_sub_category();
    $get_product_sub_category = $this->M_product_sub_category->get_product_sub_category();

    $data_nav['product_category'] = $get_product_category->result();
    $data_nav['product_sub_category'] = $get_product_sub_category->result();

    // if ($this->session->userdata('user_id')) {
		// 	$user_id = $this->session->userdata('user_id');
		// 	$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$user_id);
		// 	$data_nav['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		// 	$data_nav['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
    // }

    $head_data['page_title'] = "Quotation Detail";
    $this->load->view('template/front/head_front',$head_data);
    $this->load->view('template/front/navigation',$data_nav);
    $this->load->view('private/quotation/buyer_quotation_detail',$data);
    $this->load->view('template/front/foot_front');
  }

  function get_unread_quotation_notification_bell() {
    $supplier_id = $this->session->userdata('user_id');
    $quotation_rules['join']['other_table_columns'] = " , user_tb.* , quotation_tb.Code AS QuotationCode ";
    $quotation_rules['join']['join_table'] = " INNER JOIN user_tb
    ON  user_tb.Id = quotation_tb.BuyerId  ";
    $quotation_rules['filter_value'] =  array('quotation_is_read' => 0, 'supplier_id'=>$supplier_id);//interlocutors adalah lawan bicara
    //$quotation_rules['group_by'] =  " quotation_tb.Code ";
    $this->M_quotation->set_search_quotation($quotation_rules);
    $get_quotation = $this->M_quotation->get_quotation();



    //$get_quotation = $this->M_quotation->get_quotation("",$supplier_id,"",0);
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
          $profile_image = $ucnb->ProfileImage;
          $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
          $var .= "<li>
            <a href=".base_url()."Quotation/supplier_quotation_detail?quotation_code=".$ucnb->QuotationCode.">
              <div class='pull-left'>
                <img src=".base_url()."assets/supplier_upload/".$profile_image." height='50' width='50' class='img-circle' alt=''>
              </div>
              <h4>
                ".$ucnb->CompanyName."
                <small><i class='fa fa-clock-o'></i>".$ucnb->SendDate."</small>
              </h4>
              <span class='badge' style='background-color:red;'>"."new"."</span> <span class='label label-info'> ".$ucnb->QuotationCode."</span>
            </a>
          </li>";
        }
        $var .= "</ul>
      </li>
      <li class='footer'><a href='#'>See All Notifications</a></li>
    </ul>";
      echo $var;
  }
  function get_buyer_chat_notification_bell()  {
    $buyer_id = $this->session->userdata('user_id');
    //if (!empty($buyer_id)) {
      $quotation_rules['join']['other_table_columns'] = " , user_tb.* , quotation_tb.Code AS QuotationCode ,  count( quotationdetail_tb.QuotationCode) as UnreadCount";
      $quotation_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN quotationdetail_tb
      ON quotation_tb.Code = quotationdetail_tb.QuotationCode AND user_tb.Id = quotation_tb.SupplierId  ";
      $quotation_rules['filter_value'] =  array('quotation_detail_is_read' => 0, 'buyer_id'=>$buyer_id, 'quotation_detail_interlocutors'=> $buyer_id);//interlocutors adalah lawan bicara
      $quotation_rules['group_by'] =  " quotation_tb.Code ";
      $this->M_quotation->set_search_quotation($quotation_rules);
      $get_unread_qutation_detail = $this->M_quotation->get_quotation();



			//$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail("",$buyer_id);
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
              <div class='col-md-12 col-sm-12 col-xs-6'>".$msg."</div>
            </div>
          </div>
          <div class='drop-content'>";
        foreach ($unread_chat_notification_bell as $ucnb) {
          $var .= "<li>
                    <a href=".base_url()."Quotation/buyer_quotation_detail/".$ucnb->QuotationCode.">
                    <div class='col-md-3 col-sm-3 col-xs-3'><div class='notify-img'><img src=".base_url()."assets/supplier_upload/".$ucnb->ProfileImage." height='40' width='40' class='img-circle' alt=''></div></div>
                    <div class='col-md-9 col-sm-9 col-xs-9 pd-l0'>
                      <h5 style='margin-top: -5px; margin-bottom: -2px;'><b>".$ucnb->CompanyName."</b></h5>
                      <hr>
                      <span class='badge' style='background-color:orange;'>".$ucnb->UnreadCount."</span> <span class='label label-info'> unread comment</span>
                    </div>
                  </a>
                </li>";
        }
        $var .= "</div>
        <div class='notify-drop-footer text-center' style='padding-bottom: 300px;'>
          <a href=''><i class='fa fa-eye'></i> See All Notifications</a>
        </div>
      </ul>";
      echo $var;

  }
  function get_supplier_chat_notification_bell(){
    //$buyer_id = $this->session->userdata('user_id');
    $supplier_id = $this->session->userdata('user_id');
    //if (!empty($supplier_id)) {
      $quotation_rules['join']['other_table_columns'] = " , user_tb.* , quotation_tb.Code AS QuotationCode ,  count( quotationdetail_tb.QuotationCode) as UnreadCount";
      $quotation_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN quotationdetail_tb
      ON quotation_tb.Code = quotationdetail_tb.QuotationCode AND user_tb.Id = quotation_tb.BuyerId  ";
      $quotation_rules['filter_value'] =  array('quotation_detail_is_read' => 0, 'supplier_id'=>$supplier_id, 'quotation_detail_interlocutors'=> $supplier_id);//interlocutors adalah lawan bicara
      $quotation_rules['group_by'] =  " quotation_tb.Code ";
      $this->M_quotation->set_search_quotation($quotation_rules);
      $get_unread_qutation_detail = $this->M_quotation->get_quotation();
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
          $profile_image = $ucnb->ProfileImage;
          $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
          $var .= "<li>
            <a href=".base_url()."Quotation/supplier_quotation_detail?quotation_code=".$ucnb->QuotationCode.">
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
      <li class='footer'><a href='".base_url()."Quotation/supplier_all_notifications_chat_view'>See All Notifications</a></li>
    </ul>";
      echo $var;

  }
  function get_quotation_detail_chat(){
    // ============
    $member_id = $this->session->userdata('user_id');
    $quotation_code = $this->input->post('quotation_code');
    //echo $member_id." ".$quotation_code;exit();
    // echo "<pre>";
    // print_r($quotation_detail_rules);
    // echo "</pre>";exit();
    $quotation_detail_rules['join']['other_table_columns'] = " , user_tb.Id AS UserId,  quotationdetail_tb.Id AS QuotationDetailId, user_tb.*  ";
    $quotation_detail_rules['join']['join_table'] = " INNER JOIN user_tb
    ON user_tb.Id = quotationdetail_tb.MemberId  ";
    $quotation_detail_rules['filter_value'] =  array('quotation_code' => $quotation_code, 'is_read' => 0);
    $this->M_quotation_detail->set_search_quotation_detail($quotation_detail_rules);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail();
      // =========================
    // $buyer_id = $this->session->userdata('user_id');
    // $supplier_id = $this->session->userdata('user_id');
    // $id_member = !empty($buyer_id) ? $buyer_id : $supplier_id ;
    // $quotation_id = $this->input->post('quotation_id');
    // $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($quotation_id,"",0);
    $quotation_detail_all = $get_quotation_detail->result();
    // echo "<pre>";
    //   print_r($get_quotation_detail->result());
    //   echo "</pre>";exit();
    //echo "~".$id_member."~";
    $row = $get_quotation_detail->row();
    // echo "Id Member".$row->IdMember."Id Member";
    // echo $get_quotation_detail->num_rows();exit();
    if ($get_quotation_detail->num_rows() > 0 AND $row->MemberId != $member_id) {
      foreach ($quotation_detail_all as $quotation_detail) {
        if ($quotation_detail->IsRead == 0) {
          $profile_image = $quotation_detail->ProfileImage;
          $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
          echo '<li class="left clearfix"><span class="chat-img pull-left">
            <img src='.base_url('assets/supplier_upload/').$profile_image.' alt="User Avatar" width="45" height="45" class="img-circle" />
          </span>
          <div class="chat-body clearfix">
            <div class="header">
            <strong class=" primary-font">'.$quotation_detail->CompanyName.'</strong>
              <small class="pull-right text-muted"><span class="glyphicon glyphicon-time"></span>'.$quotation_detail->SendDate.'</small>
            </div>
            <p>
              '.$quotation_detail->Message.'
            </p>
          </div>
        </li>';
          if ($member_id != $quotation_detail->MemberId) {
            $set_quotation_detail_data = array('IsRead' => 1);
            $this->M_quotation_detail->update_quotation_detail($set_quotation_detail_data,"",$quotation_detail->QuotationDetailId);
          }
        }
      }
      }
    //echo "d";

  }
  function add_quotation_detail(){
    $quotation_code = $this->input->post('quotation_code');
    $member_id = $this->input->post('member_id');
    $message = $this->input->post('message');
    $date = $this->M_date->get_datetime_sql_format();
    $data = array(
      'QuotationCode' => $quotation_code,
      'MemberId' => $member_id,
      'Message' => $message,
      'SendDate' => $date
    );
    $quotation_detail_id = $this->M_quotation_detail->add_quotation_detail($data);
    $quotation_detail_rules['join']['other_table_columns'] = " , user_tb.*  ";
		$quotation_detail_rules['join']['join_table'] = " INNER JOIN user_tb
		ON user_tb.Id = quotationdetail_tb.MemberId  ";
    $quotation_detail_rules['filter_value'] =  array('quotation_detail_id' => $quotation_detail_id);
    $this->M_quotation_detail->set_search_quotation_detail($quotation_detail_rules);
    $get_quotation_detail = $this->M_quotation_detail->get_quotation_detail();


    //$get_quotation_detail = $this->M_quotation_detail->get_quotation_detail($quotation_code,$quotation_code_detail);
    $quotation_detail = $get_quotation_detail->row();
    $profile_image = $quotation_detail->ProfileImage;
    $profile_image = !empty($profile_image) ? $profile_image : "user_without_profile_image.png" ;
    echo '<li class="right clearfix"><span class="chat-img pull-right">
      <img src='.base_url('assets/supplier_upload/').$profile_image.' alt="User Avatar" width="45" class="img-circle" />
    </span>
    <div class="chat-body clearfix">
      <div class="header">
        <small class=" text-muted"><span class="glyphicon glyphicon-time"></span>'.$date.'</small>
        <strong class="pull-right primary-font">'."Me".'</strong>
      </div>
      <p  class="word-wrap">
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
  function update_quotation_status(){
    $quotation_code = $this->input->post('quotation_code');
    $status = $this->input->post('status');
    $data = array('IsAccepted' => $status);
    $this->M_quotation->update_quotation($data,$quotation_code) ;
    //$this->session->set_flashdata('msg', 'Edit Product Category successfully...');
    redirect('Quotation/buyer_quotation_detail/'.$quotation_code);

  }
  function add_quotation(){
    $buyer_id = $this->session->userdata('user_id');
    $supplier_email = $this->input->post('supplier_email');
    $supplier_id = $this->input->post('supplier_id');
    $product_id = $this->input->post('product_id');
    $product_name = $this->input->post('product_name');
    $qty = $this->input->post('qty');
    $message =$this->input->post('message');
    $date = $this->M_date->get_datetime_sql_format();
    $quotation_rules['filter_value'] =  array('date' => $this->M_date->get_date_sql_format());
    $this->M_quotation->set_search_quotation($quotation_rules);
    $get_quotation = $this->M_quotation->get_quotation();

    $quotation_num_rows = $get_quotation->num_rows();
    $urutan = $quotation_num_rows + 1;
    if ($urutan < 10) {
      $urutan = "00".$urutan;
    }elseif ($urutan > 9 AND $urutan < 100) {
      $urutan = "0".$urutan;
    }
    $quotation_code = "Q".$this->M_date->get_date_code_format().$urutan;

    $user_rules['filter_value'] =  array('user_id'=>$buyer_id);
    $this->M_user->set_search_user($user_rules);
    $get_buyer = $this->M_user->get_user();


    // $product_rules['join']['other_table_columns'] = " , product_tb.Id AS ProductId, user_tb.* , productcategory_tb.*, productsubcategory_tb.* ";
		// $product_rules['join']['join_table'] = " INNER JOIN user_tb  INNER JOIN productcategory_tb INNER JOIN productsubcategory_tb
		// ON user_tb.Id = product_tb.SupplierId
		// AND product_tb.ProductSubCategoryCode = productsubcategory_tb.Code
		// AND productcategory_tb.Code = productsubcategory_tb.ProductCategoryCode";
		// $product_rules['filter_value'] =  array('product_id' => $product_id);
		// $this->M_product->set_search_product($product_rules);
    // $get_product = $this->M_product->get_product();

    // $product_pic_rules['filter_value'] =  array('product_id'=>$product_id);
		// $this->M_product->set_search_product_pic($product_pic_rules);
		// $get_product_pic = $this->M_product->get_product_pic();

    // $product_pic  = $get_product_pic->result();
    $buyer = $get_buyer->row();
    $content = " <p><img  src='http://dinilaku.com/assets/front_end_assets/img/2Dinilaku_Logo.png' width='175' alt=''></p>
                <h2>Request for Quotation Code <b>".$quotation_code."</b></h2>
                <table>
                  <tr>
                  <td><p style='font-size:large'>Request by </p></td><td><p style='font-size:large'> : ".$buyer->LastName."</p></td>
                  </tr>
                  <tr>
                  <td><p style='font-size:large'>Email </p></td><td><p style='font-size:large'> : ".$buyer->Email."</p></td>
                  </tr>
                  <tr>
                  <td><p style='font-size:large'>To buy </p></td><td><p style='font-size:large'> : ".$product_name."</p></td>
                  </tr>
                  <tr>
                  <td><p style='font-size:large'>Quantity </p></td><td><p style='font-size:large'> : ".$qty."</p></td>
                  </tr>
                  <tr>
                  <td><p style='font-size:large'>Message </p></td><td><p style='font-size:large'> : ".$message."</p></td>
                  </tr>
                </table>";
    $subject = " Request for quotation from ".$buyer->LastName." to buy ".$product_name;
    $data = array(
      "Code" => $quotation_code,
      'SendDate' => $date,
      'BuyerId' => $buyer_id,
      'SupplierId' => $supplier_id,
      'Subject' => $subject,
      'Content' => $content,
      'ProductId' => $product_id,
      'IsAccepted' => -1,
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
  function get_supplier_all_notifications_chat_json()
  {
    $supplier_id = $this->session->userdata('user_id');
    $quotation_rules['join']['other_table_columns'] = " , user_tb.* , quotation_tb.Code AS QuotationCode ,  count( quotationdetail_tb.QuotationCode) as UnreadCount";
    $quotation_rules['join']['join_table'] = " INNER JOIN user_tb INNER JOIN quotationdetail_tb
    ON quotation_tb.Code = quotationdetail_tb.QuotationCode AND user_tb.Id = quotation_tb.BuyerId  ";
    $quotation_rules['filter_value'] =  array('quotation_detail_is_read' => 0, 'supplier_id'=>$supplier_id, 'quotation_detail_interlocutors'=> $supplier_id);//interlocutors adalah lawan bicara
    $quotation_rules['group_by'] =  " quotation_tb.Code ";
    $this->M_quotation->set_search_quotation($quotation_rules);
    $get_unread_qutation_detail = $this->M_quotation->get_quotation();
    $unread_chat_notification = $get_unread_qutation_detail->result();

    $data = array();
    foreach ($unread_chat_notification as $ucn) {
      $row = array(
        'Link' => base_url()."Quotation/supplier_quotation_detail?quotation_code=".$ucn->QuotationCode,
        'QuotationCode' => $ucn->QuotationCode,
        'LastName' => $ucn->LastName,
        'Subject' => $ucn->Subject,
        'ProfileImage' => base_url()."assets/supplier_upload/".$ucn->ProfileImage,
        'UnreadCount' => $ucn->UnreadCount
      );
      $data[] = $row;
    }
    echo json_encode($data);
  }
  function supplier_all_notifications_chat_view(){


    $this->load->view('template/back/head_back');
    $this->load->view('template/back/sidebar_back');
    $this->load->view('private/quotation/supplier_all_notifications_chat');
    $this->load->view('template/back/foot_back');
  }
}

?>
