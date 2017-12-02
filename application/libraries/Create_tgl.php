<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 * 
 *
 * @author I Made Subrata Sandhiyasa
 */

class Create_tgl {
	var $CI = NULL;
	function __construct(){
		$this->ci =& get_instance();
    //$this->ci->load->model('M_rbac'); 
	}

  
  function generate_tgl($tgl){  
    $from2 = $tgl;
    $date2 = DateTime::createFromFormat('m/d/Y',$from2);
    $bulanU = $date2->format("m");
    $tgl = $date2->format("d");
    $tahun = $date2->format("Y");
   
      if ($bulanU == '01'){
          $bulans = 'Januari';
        }elseif ($bulanU == '02'){ 
          $bulans = 'Februari';
        }elseif ($bulanU == '03'){
          $bulans = 'Maret';
        }elseif ($bulanU == '04'){
          $bulans = 'April';
        }elseif ($bulanU == '05'){
          $bulans = 'Mei';
        }elseif ($bulanU == '06'){
          $bulans = 'Juni'; 
        }elseif ($bulanU == '07'){
          $bulans = 'Juli'; 
        }elseif ($bulanU == '08'){
          $bulans = 'Agustus';  
        }elseif ($bulanU == '09'){
          $bulans = 'September';  
        }elseif ($bulanU == '10'){
          $bulans = 'Oktober';
        }elseif ($bulanU == '11'){
          $bulans ==  'November';
        }elseif ($bulanU == '12'){
          $bulans = 'Desember'; 
        }

        $TglJadi = $tgl.' '.$bulans.' '.$tahun;
     return $TglJadi;
   
   
  }


    

   

 
}
?>
