<?php
/**
*
*/
class M_date extends CI_Model{

 public function get_datetime_sql_format(){
   date_default_timezone_set("Asia/Makassar");
  $this->tgl_pesan = getdate();
  return $this->tgl_pesan['year'].'-'.
  $this->tgl_pesan['mon'].'-'.
  $this->tgl_pesan['mday']." ".
  $this->tgl_pesan['hours'].":".
  $this->tgl_pesan['minutes'].":".
  $this->tgl_pesan['seconds'];
 }
 public function get_date_sql_format(){
  date_default_timezone_set("Asia/Makassar");
 $this->tgl_pesan = getdate();
 return $this->tgl_pesan['year'].'-'.
 $this->tgl_pesan['mon'].'-'.
 $this->tgl_pesan['mday'];
}
 public function get_date_code_format(){
  date_default_timezone_set("Asia/Makassar");
  $this->tgl_pesan = getdate();
  if ($this->tgl_pesan['mon'] < 10) {
    $mon = "0".$this->tgl_pesan['mon'];
  }else {
    $mon = $this->tgl_pesan['mon'];
  }
  
  if ($this->tgl_pesan['mday'] < 10) {
    $mday = "0".$this->tgl_pesan['mday'];
  }else {
    $mday = $this->tgl_pesan['mday'];
  }
  return substr($this->tgl_pesan['year'],2).$mon.$mday;
}
}


?>
