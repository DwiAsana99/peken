<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @brief library Class auth yang berisi fungsi-fungsi authentifikasi user
 * library Class auth yang berisi fungsi-fungsi authentifikasi user login
 *
 * @author I Made Agus Setiawan
 */

class Auth {
	var $CI = NULL;
	function __construct(){
		$this->CI =& get_instance();
	}

  /**
  * Fungsi untuk mengecek login user
  * @return boolean
  */
  function is_logged_in(){
    //TODO: perlu direview kembali mekanisme nya.
    if($this->CI->session->userdata('Kode_Operator') == '')
    {
      return false;
    }
    return true;
  }

  /**
  * Fungsi untuk untuk validasi di setiap halaman yang mengharuskan authentikasi
  */
  function restrict(){
    if($this->is_logged_in() === false)
    {
      if(isset($_SERVER['PATH_INFO']))
        redirect('Login/login?call_from='.$_SERVER['PATH_INFO']);
      else
        redirect('Login/login');
    }
  }
}
?>
