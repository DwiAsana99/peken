<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 * 
 *
 * @author I Made Subrata Sandhiyasa
 */

class Create_menu {
	var $CI = NULL;
	function __construct(){
		$this->ci =& get_instance();
    $this->ci->load->model('M_rbac'); 
	}

  
  function generate_menu($user_menu){
   
        foreach($user_menu as $m){
          $id_menu = $m->id_menu;
          $nama_menu  = $m->nama; 
          $icon = $m->icon;

              $submenu =  $this->generate_submenu($m->id_menu);
              $menu[] =   " <li class='treeview'>
                              <a href='#'>
                                    <i class='".$icon."'></i> <span>".$nama_menu."</span> <i class='fa fa-angle-left pull-right'></i>
                              </a> 
                              <ul class='treeview-menu'> 
                              ". $submenu."
                              </ul>
                        </li>";   
    }
     return $menu;
   
   
  }


    function generate_submenu($id_menu){

           $data_sub = $this->ci->M_rbac->get_submenu_user($id_menu);
                foreach($data_sub as $s){
                      $id_sub = $s->id_submenu;
                      $nama_submenu = $s->nama_submenu;
                      $link = base_url($s->link);
                      $icon = $s->icon;

                  if ($id_sub != $s->id_submenu){
                      $submenu[]=  "<li><a href='".$link."'><i class='".$icon."'></i>".$s->nama_submenu." </a></li>";
                  }else{
                     
                     $submenu[]=  "<li><a href='".$link."'><i class='".$icon."'></i>".$s->nama_submenu." </a></li>";
                  }
                   $id_sub =$s->id_submenu;
                  
                }

   $submenu_fix = implode('', $submenu);
  
     return $submenu_fix;

  }

   

 
}
?>
