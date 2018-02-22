<?php

class Product extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','pagination'));
		$this->load->helper(array('form', 'url'));
		$this->load->model(array('M_product','M_product_category','M_product_sub_category','M_pagination','M_quotation','M_quotation_detail'));
	}

	function index(){
		redirect('Product/public_product_list_view');
	}
	/* function public_product_list_view() digunakan untuk menampilkan product list
	kepada public (non member, member)*/
	function public_product_list_view(){
		//mengambil nilai page dari url
		$page = $this->input->get('per_page');
		$this->M_pagination->set_config("",10,"","","","","");
		/* mengecek apakah nilai dari form pencarian ada atau tidak jika ada maka
		Product list akan menampilkan product berdasarkan nama product atau kategori
		produk */
		if ( (!empty($this->input->get('search_value')) OR !empty($this->input->get('product_category_code'))) OR !empty($this->input->get('product_sub_category_code')) ) {
			if (!empty($this->input->get('search_value'))) {
				$search_value = $this->input->get('search_value');
				$data['search_value'] = $search_value;
				$get_product = $this->M_product->get_product("","",$search_value,"","","tbproductpic.IdProduct");
				$this->M_pagination->set_config(
					"","","","","","","","index.php/Product/public_product_list_view?search_value=".$search_value,
					$get_product->num_rows()
				);
				$config = $this->M_pagination->get_config();
				$offset = $this->M_pagination->get_offset($page);
				$get_product = $this->M_product->get_product("","",$search_value,$offset,$config["per_page"],"tbproductpic.IdProduct");
				$data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
				$data['breadcrumb'] .= "<li class='active'>"."Search for '".$search_value."''</li>";
			}
			elseif ( !empty($this->input->get('product_category_code'))) {
				$product_category_code = $this->input->get('product_category_code');
				$get_product = $this->M_product->get_product("","","","","","tbproductpic.IdProduct",$product_category_code);
				$this->M_pagination->set_config(
					"","","","","","","","index.php/Product/public_product_list_view?product_category_code=".$product_category_code,
					$get_product->num_rows()
				);
				$config = $this->M_pagination->get_config();
				$offset = $this->M_pagination->get_offset($page);
				$get_product = $this->M_product->get_product("","","",$offset,$config["per_page"],"tbproductpic.IdProduct",$product_category_code);
				$get_product_category = $this->M_product_category->get_product_category($product_category_code);
				$baris = $get_product_category->row();
				$data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
				$data['breadcrumb'] .= "<li class='active'>".$baris->ProductCategory."</li>";

			}
			else {
				$product_sub_category_code = $this->input->get('product_sub_category_code');
				$get_product = $this->M_product->get_product("","","","","","tbproductpic.IdProduct","",$product_sub_category_code);
				$this->M_pagination->set_config(
					"","","","","","","","index.php/Product/public_product_list_view?product_sub_category_code=".$product_sub_category_code,
					$get_product->num_rows()
				);
				$config = $this->M_pagination->get_config();
				$offset = $this->M_pagination->get_offset($page);
				$get_product = $this->M_product->get_product("","","",$offset,$config["per_page"],"tbproductpic.IdProduct","",$product_sub_category_code);
				$get_product_sub_category = $this->M_product_sub_category->get_product_sub_category_query($product_sub_category_code);
					$baris = $get_product_sub_category->row();
					$data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
					$data['breadcrumb'] .= "<li>"."<a href='".site_url('Product/public_product_list_view?')."product_category_code=".$baris->ProductCategoryCode."'>".$baris->ProductCategory."</a>"."</li>";
					$data['breadcrumb'] .= "<li class='active'>".$baris->ProductSubCategory."</li>";
					// $data['breadcrumb'] .= "<li class='active'>"."<a  href='".site_url('Product/public_product_list_view?')."product_sub_category_code=".$product_sub_category_code."'>".$baris->ProductSubCategory."</a>"."</li>";


			}
		}
		/*menampilkan semua product secara acak*/
		else {
			$get_product = $this->M_product->get_product("","","","","","tbproductpic.IdProduct");
			$this->M_pagination->set_config(
				"","","","","","","","index.php/product/public_product_list_view",
				$get_product->num_rows()
			);
			$config = $this->M_pagination->get_config();
			$offset = $this->M_pagination->get_offset($page);
			$get_product = $this->M_product->get_product("","","",$offset, $config["per_page"],"tbproductpic.IdProduct");
			$data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
			$data['breadcrumb'] .= "<li class='active'>All Product</li>";
		}
		$this->pagination->initialize($config);
		$data['product'] = $get_product->result();
		$str_links = $this->pagination->create_links();
		$data["links"] = explode('&nbsp;',$str_links );
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
		//print_r($str_links);exit();
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
		$this->load->view('public/product/product_list',$data);
		$this->load->view('template/front/foot_front');
	}
	function public_product_detail_view($id_product){
		$get_product = $this->M_product->get_product("",$id_product);
		$data['product'] = $get_product->result();
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
		$baris = $get_product->row();
		$data['breadcrumb'] = "<li>"."<a href='".site_url('Home/home_view/')."'>Home</a>"."</li>";
		$data['breadcrumb'] .= "<li>"."<a href='".site_url('Product/public_product_list_view?')."product_category_code=".$baris->ProductCategoryCode."'>".$baris->ProductCategory."</a>"."</li>";
		$data['breadcrumb'] .= "<li >"."<a  href='".site_url('Product/public_product_list_view?')."product_sub_category_code=".$baris->ProductSubCategoryCode."'>".$baris->ProductSubCategory."</a>"."</li>";
		$data['breadcrumb'] .= "<li class='active'>".$baris->Name."</li>";
		$this->load->view('template/front/head_front',$head_data);
		$this->load->view('template/front/navigation',$data_nav);
		$this->load->view('public/product/product_detail',$data);
		$this->load->view('template/front/foot_front');
	}
	function product_view(){
		$id_supplier = $this->session->userdata('id_supplier');
		$get_product = $this->M_product->get_product($id_supplier,"","","","","tbproductpic.IdProduct");
		$data['product'] = $get_product->result();
		$get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['unread_quotation'] = $get_quotation->result();
		$data_notification['unread_quotation_num_rows'] = $get_quotation->num_rows();
		$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
		$data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		$data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		$this->load->view('template/back/head_back',$data_notification);
		$this->load->view('template/back/sidebar_back');
		$this->load->view('private/product/product',$data);
		$this->load->view('template/back/foot_back');
	}
	function product_edit_view($id_product){
		$id_supplier = $this->session->userdata('id_supplier');
		$get_product = $this->M_product->get_product("",$id_product);
		$get_product_category = $this->M_product_category->get_product_category();
		$data['product_category'] = $get_product_category->result();
		$data['product'] = $get_product->result();
		$row = $get_product->row();
		$selected['product_sub_category_code'] = $row->ProductSubCategoryCode;
		$selected['product_sub_category'] = $row->ProductSubCategory;
		$data['product_sub_category_tag'] = $this->M_product_sub_category->get_product_sub_category($row->ProductCategoryCode,1,$selected);
		$get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['unread_quotation'] = $get_quotation->result();
		$data_notification['unread_quotation_num_rows'] = $get_quotation->num_rows();
		$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
		$data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		$data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		$this->load->view('template/back/head_back',$data_notification);
		$this->load->view('template/back/sidebar_back');
		$this->load->view('private/product/edit_product',$data);
		$this->load->view('template/back/foot_back');
	}

	function edit_product(){
		$id_supplier = $this->session->userdata('id_supplier');
		$id_product = $this->input->post('id_product');
		$data = array(
			'Name' => $this->input->post('product_name'),
			'Unit' => $this->input->post('unit'),
			'Price' => $this->input->post('price'),
			'SupplyAbility' => $this->input->post('supply_ability'),
			'PeriodSupplyAbility' => $this->input->post('period_supply_ability'),
			'ProductSubCategoryCode' => $this->input->post('product_sub_category_code'),
			'ProductDescription' => $this->input->post('product_description'),
			'PkgDelivery' => $this->input->post('pkg_delivery')
		);
		$product_pictures = $this->input->post('file');
		$id_product = $this->M_product->edit_product($id_product,$data,$product_pictures);

		// print_r($product_picture);exit();
		$this->session->set_flashdata('msg', 'Update product successfully ...');
		redirect('Product/product_view');
	}
	function product_add_view(){
		$id_supplier = $this->session->userdata('id_supplier');
		$get_product_category = $this->M_product_category->get_product_category();
		$data['product_category'] = $get_product_category->result();
		$get_quotation = $this->M_quotation->get_quotation("",$id_supplier,"",0);
		$data_notification['unread_quotation'] = $get_quotation->result();
		$data_notification['unread_quotation_num_rows'] = $get_quotation->num_rows();
		$get_unread_qutation_detail = $this->M_quotation_detail->get_unread_qutation_detail($id_supplier);
		$data_notification['unread_quotation_detail'] = $get_unread_qutation_detail->result();
		$data_notification['unread_quotation_detail_num_rows'] = $get_unread_qutation_detail->num_rows();
		$this->load->view('template/back/head_back',$data_notification);
		$this->load->view('template/back/sidebar_back');
		$this->load->view('private/product/add_product',$data);
		$this->load->view('template/back/foot_back');
	}
	function generate_product_sub_category(){
		$product_category_code=$this->input->post('product_category_code');
		$product_sub_category = $this->M_product_sub_category->get_product_sub_category($product_category_code,1);
		echo $product_sub_category;
		// echo $product_category_code ;exit();

		// foreach ($this->M_product_sub_category->get_product_sub_category($product_category_code)->result_array() as $data ){
		// echo "<option value='$data[Code]'>$data[ProductSubCategory]</option>";
		// }
		// foreach ($get_product_sub_category->result_array() as $data) {
		// 	echo "<option value=".$data['Code'].">".$data["product_sub_category_code"]."</option>";
		// }

	}
	function add_product(){
		$id_supplier = $this->session->userdata('id_supplier');
		$data = array(
			'Name' => $this->input->post('product_name'),
			'Unit' => $this->input->post('unit'),
			'Price' => $this->input->post('price'),
			'SupplyAbility' => $this->input->post('supply_ability'),
			'PeriodSupplyAbility' => $this->input->post('period_supply_ability'),
			'ProductSubCategoryCode' => $this->input->post('product_sub_category_code'),
			'ProductDescription' => $this->input->post('product_description'),
			'PkgDelivery' => $this->input->post('pkg_delivery'),
			'IdSupplier' => $id_supplier
		);
		$product_pictures = $this->input->post('file');
		$id_product = $this->M_product->add_product($data,$product_pictures);

		// print_r($product_picture);exit();
		$this->session->set_flashdata('msg', 'Add Product successfully ...');
		redirect('Product/product_view');
	}

	function add_product_picture(){
		$config['upload_path']   = './assets/supplier_upload';
		$config['allowed_types'] = 'gif|jpg|png|ico|pdf|docx';
		$config['max_size']             = 6000;
		//mengganti nama asli file menjadi cstom
		$new_name = time().$_FILES["userfiles"]['name'];
		$config['file_name'] = $new_name;
		$this->load->library('upload',$config);
		if($this->upload->do_upload('userfiles')){
			$token=$this->input->post('token_foto');
			$nama=$this->upload->data('file_name');
		}
		$data = $nama.",".$token;
		echo json_encode($data);
	}
	function remove_product_picture_edit(){
		$id_product_pic=$this->input->post('id_product_pic');
		$this->db->where('IdProductPic', $id_product_pic);
		$this->db->delete('tbproductpic');
	}
	function show_product_detail_modal()
	{
		$id_supplier = $this->session->userdata('id_supplier');
		$id_product = $this->input->post('id_product');
		$get_product = $this->M_product->get_product($id_supplier,$id_product,"","","");
		$product = $get_product->result();
		$row = $get_product->row();

		// print_r($row);exit();
		foreach ($product as $key ) {
			// echo $row->Name;
			echo "<img src=".base_url()."assets/supplier_upload/".$key->FileName." alt='' width='172'>";

		}
		echo "<br>Product Name : ".$row->Name;
		echo "<br>Product Unit : ".$row->Unit;
		echo "<br>Product Price : ".$row->Price;
		echo "<br>Product Description : ".$row->ProductDescription;
		echo "<br>Package Delivery : ".$row->PkgDelivery;
		echo "<br>Supply Ability : ".$row->SupplyAbility;
		echo "<br>Period Supply Ability : ".$row->PeriodSupplyAbility;
		echo "<br>Product Category : ".$row->ProductCategory;
		echo "<br>Product Sub Category : ".$row->ProductSubCategory;

	}
	function remove_product_picture(){
		$nama=$this->input->post('nama');
		if(file_exists($file='./assets/supplier_upload/'.str_replace(' ', '_', $nama))){
			unlink($file);
		}
		echo "{}";
		}


	}
