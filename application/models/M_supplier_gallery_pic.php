<?php
/**
*
*/
class M_supplier_gallery_pic extends CI_Model{
  protected $other_table_columns;
  protected $join_table;
  protected $filter_value;
  protected $group_by;
  protected $order_by;
  protected $limit;
  protected $offset;
  // function get_member("0",$email, $password) {
  //   $query = $this->db->query("SELECT * FROM tbmember WHERE Email = '$email' AND Pwd = '$password'");
  //   return $query;
  //  }
  // mencari 10 supplier teratas
  function set_search_supplier_gallery_pic($rules){
    $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
    $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
    $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
    $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
    $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
    $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
    // $this->filter_value = isset($rules['filter_value']['user_level']) ? " AND user_tb.UserLevel = ".$rules['filter_value']['user_level'] : "" ;
    $this->filter_value = isset($rules['filter_value']['supplier_id']) ? " AND suppliergallerypic_tb.SupplierId = ".$rules['filter_value']['supplier_id'] : "" ;
    // $this->filter_value .= isset($rules['filter_value']['search_value']) ? " AND user_tb.CompanyName LIKE "."'%".$rules['filter_value']['search_value']."%'"  : "" ;
  }
  function get_supplier_gallery_pic() {
    $query = "SELECT suppliergallerypic_tb.* ".$this->other_table_columns."
    FROM suppliergallerypic_tb ".$this->join_table."
    WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
    //echo $query;exit();
    $query = $this->db->query($query);
    return $query;
  }
  function update_supplier_gallery_pic($supplier_id,$supplier_gallery_pic) {
    foreach ($supplier_gallery_pic as $row => $value) {
      $supplier_gallery_pic_data = array("SupplierId" => $supplier_id,"FileName" => $value );
      $this->db->insert('suppliergallerypic_tb', $supplier_gallery_pic_data);
    }
  }
}

?>
