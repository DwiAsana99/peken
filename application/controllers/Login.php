<?php

class Login extends CI_Controller{

	function __construct(){
		//$this->CI =& get_instance();
		parent::__construct();
		//$this->load->library( 'create_menu');
		$this->load->model(array('M_user'));
	}


	

	// function dashboard(){
	//
	//
	// 	$username = $this->session->userdata('Username');
	// 	$password = $this->session->userdata('Password');
	// 	$result = $this->M_user->getdataOP($username, $password)->result();
	// 	if (!empty($result)) {
	//
	// 		$role_user =  $this->M_rbac->get_role_user($result[0]->id_user);
	// 		$menu_user =  $this->M_rbac->get_menu_user($role_user[0]->id_role);
	// 		$menu_aktif =  $this->create_menu->generate_menu($menu_user);
	// 		$submenu_all = $this->M_rbac->getLinkSubmenu();
	//
	// 		$user_session = array(
	// 			'session_id' => $this->session->userdata('session_id'),
	// 			'Kode_user' => $result[0]->id_user,
	// 			'Nama_user' => $result[0]->nama_user,
	// 			'Username' => $result[0]->username,
	// 			'Password' => $result[0]->password,
	// 			'Parent' => $result[0]->Parent,
	// 			'id_Parent' => $result[0]->Id_Parent,
	// 			'role'			=> $role_user,
	// 			'role_aktif'	=> $role_user[0]->nama_role,
	// 			'id_role_aktif'	=> $role_user[0]->id_role,
	// 			'submenu_all'	=> $submenu_all,
	// 			'menu_aktif'	=> $menu_aktif,
	// 			'Jabatan' => 'Admin',
	// 			'NamaSistem'=> 'Sistem',
	// 			'Alamat'=> 'Jalan xxx'
	//
	// 		);
	// 		$this->session->set_userdata($user_session);
	//
	//
	//
	// 		$target = 'Rbac/indexsistem';
	// 		$response['errno'] 		= 0;
	// 		$response['message'] 	= site_url($target);
	// 		$this->load->view('template/Halaman_utama');
	//
	// 	}else{
	// 		//
	// 	}
	//
	//
	// }

}
