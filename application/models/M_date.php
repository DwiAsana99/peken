<?php
/**
*
*/
class M_date extends CI_Model{

 public function get_date_sql_format(){
   date_default_timezone_set("Asia/Makassar");
  $this->tgl_pesan = getdate();
  return $this->tgl_pesan['year'].'-'.
  $this->tgl_pesan['mon'].'-'.
  $this->tgl_pesan['mday']." ".
  $this->tgl_pesan['hours'].":".
  $this->tgl_pesan['minutes'].":".
  $this->tgl_pesan['seconds'];
 }
}


?>
