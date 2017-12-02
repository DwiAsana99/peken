<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 * 
 *
 * @author I Made Subrata Sandhiyasa
 */

class User_check {
	var $CI = NULL;


	function __construct(){
		$this->ci =& get_instance();
    $this->ci->load->model('M_rbac');
    
    $this->ci->load->library('session');

    $Link  = $_SERVER['REQUEST_URI'];
    $link1 = explode('/', $Link);
    $linkreal =$link1[2].'/'.$link1[3].'/'.$link1[4];
    $Submenu_all = $this->ci->session->userdata('submenu_all');

    if (!empty($this->ci->session->userdata('id_role_aktif')) and empty($link1[5])) {
      $Submenu =  $this->ci->M_rbac->get_user_check($this->ci->session->userdata('id_role_aktif'));
      $submenuAda = $this->searchSubmenuAll($linkreal,$Submenu_all);
      
      if(!is_null($submenuAda)){
        $adatidak = $this->searchForId($linkreal,$Submenu);
        if(is_null($adatidak)){
          $ip = $this->ci->input->ip_address();
          
          $this->ci->M_rbac->addHistory($this->ci->session->userdata('Nama_user'),$ip,'Direct URL');
          
          $this->ci->session->sess_destroy();
          redirect('Login');
        }   

      }

     
  }

    

  

	}


  function searchForId($val, $array) {
   foreach ($array as $key ) {
       if ($key->link == $val) {
           return $key;
       }
   }
   return null;

}

  function searchSubmenuAll($val, $array) {
   foreach ($array as $key ) {
       if ($key->link == $val) {
           return $key;
       }
   }
   return null;

}

  
 


    
   

 
}
?>
