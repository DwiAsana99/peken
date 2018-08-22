<?php
/**
 *
 */
class M_quotation extends CI_Model{
  protected $other_table_columns;
  protected $join_table;
  protected $filter_value;
  protected $group_by;
  protected $order_by;
  protected $limit;
  protected $offset;
 function add_quotation($data){
   $this->db->insert('quotation_tb',$data);
 }
 function set_search_quotation($rules) {
  $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
  $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
  $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
  $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
  $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
  $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
  // $this->filter_value = isset($rules['filter_value']['is_published']) ? " AND product_tb.IsPublished = ".$rules['filter_value']['is_published'] : "" ;
  // $this->filter_value .= isset($rules['filter_value']['product_id']) ? " AND product_tb.Id = ".$rules['filter_value']['product_id'] : "" ;
  $this->filter_value = isset($rules['filter_value']['buyer_id']) ? " AND quotation_tb.BuyerId = ".$rules['filter_value']['buyer_id'] : "" ;
  $this->filter_value .= isset($rules['filter_value']['supplier_id']) ? " AND quotation_tb.SupplierId = ".$rules['filter_value']['supplier_id'] : "" ;
  $this->filter_value .= isset($rules['filter_value']['quotation_code']) ? " AND quotation_tb.Code = ".$rules['filter_value']['quotation_code'] : "" ;
  // $this->filter_value .= isset($rules['filter_value']['product_sub_category_code']) ? " AND product_tb.ProductSubCategoryCode = ".$rules['filter_value']['product_sub_category_code'] : "" ;
  // $this->filter_value .= isset($rules['filter_value']['search_value']) ? " AND product_tb.Name LIKE "."'%".$rules['filter_value']['search_value']."%'"  : "" ;
}

function get_quotation() {
  $query = "SELECT quotation_tb.* ".$this->other_table_columns."
  FROM quotation_tb ".$this->join_table."
  WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
  //echo $query;exit();

  $query = $this->db->query($query);
  return $query;
}
//  function get_quotation(
//    $buyer_id = "",$supplier_id = "",$id_quotation = "", $is_read = ""
//  ){
//   //  $filter_value = " AND tbmember.IsSupplier = 1 ";
//   $tbmember_join_tbquotation = "";
//    $filter_value = !empty($buyer_id) ? " AND IdBuyer = $buyer_id " : "" ;
//    $filter_value .= !empty($supplier_id) ? " AND tbquotation.IdSupplier = $supplier_id " : "" ;
//    $filter_value .= !empty($id_quotation) ? " AND tbquotation.IdQuotation = $id_quotation " : "" ;
//    $filter_value .= is_numeric($is_read) ? " AND tbquotation.IsRead = $is_read " : "" ;
//    if (!empty($buyer_id)) {
//       $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdSupplier";
//    } elseif(!empty($supplier_id)){
//       $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdBuyer";
//    }
//    $query = "SELECT *
//    FROM tbquotation INNER JOIN tbproduct INNER JOIN tbmember
//    ON tbproduct.IdProduct = tbquotation.IdProduct ".$tbmember_join_tbquotation." WHERE 1=1 ".$filter_value.
//    " ORDER BY DateSend DESC";
//       //echo $query;exit();
//    $query = $this->db->query($query);

//    return $query;

//  }
 function update_quotation($data="", $id_quotation=""){
   $this->db->where('IdQuotation',$id_quotation );
   $this->db->update('tbquotation',$data);
 }
}

?>
