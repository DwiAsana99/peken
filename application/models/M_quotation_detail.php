<?php
/**
 *
 */
class M_quotation_detail extends CI_Model{
  protected $other_table_columns;
  protected $join_table;
  protected $filter_value;
  protected $group_by;
  protected $order_by;
  protected $limit;
  protected $offset;
 function add_quotation_detail($data){
   $this->db->insert('quotationdetail_tb',$data);
   return $this->db->insert_id();
 }

 function set_search_quotation_detail($rules="") {
  $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
  $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
  $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
  $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
  $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
  $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
  // $this->filter_value = isset($rules['filter_value']['is_published']) ? " AND product_tb.IsPublished = ".$rules['filter_value']['is_published'] : "" ;
  // $this->filter_value .= isset($rules['filter_value']['product_id']) ? " AND product_tb.Id = ".$rules['filter_value']['product_id'] : "" ;
  $this->filter_value = isset($rules['filter_value']['quotation_code']) ? " AND quotationdetail_tb.QuotationCode = ".$rules['filter_value']['quotation_code'] : "" ;
  $this->filter_value .= isset($rules['filter_value']['member_id']) ? " AND quotationdetail_tb.MemberId = ".$rules['filter_value']['member_id'] : "" ;
  $this->filter_value .= isset($rules['filter_value']['quotation_detail_id']) ? " AND quotationdetail_tb.Id = ".$rules['filter_value']['quotation_detail_id'] : "" ;
  $this->filter_value .= isset($rules['filter_value']['is_read']) ? " AND quotationdetail_tb.IsRead = ".$rules['filter_value']['is_read'] : "" ;
  //$this->filter_value .= isset($rules['filter_value']['quotation_code']) ? " AND quotation_tb.Code = ".$rules['filter_value']['quotation_code'] : "" ;
  // $this->filter_value .= isset($rules['filter_value']['product_sub_category_code']) ? " AND product_tb.ProductSubCategoryCode = ".$rules['filter_value']['product_sub_category_code'] : "" ;
  // $this->filter_value .= isset($rules['filter_value']['search_value']) ? " AND product_tb.Name LIKE "."'%".$rules['filter_value']['search_value']."%'"  : "" ;
}

function get_quotation_detail() {
  $query = "SELECT quotationdetail_tb.* ".$this->other_table_columns."
  FROM quotationdetail_tb ".$this->join_table."
  WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
  //echo $query;exit();

  $query = $this->db->query($query);
  return $query;
}
















//  function get_unread_qutation_detail($supplier_id='',$buyer_id='')
//  {
//    $tbmember_join_tbquotation = "";
//    $filter_value = " AND tbquotationdetail.IsRead = 0 ";
//    $filter_value .= !empty($supplier_id) ? " AND tbquotation.IdSupplier = $supplier_id" : "" ;
//    $filter_value .= !empty($supplier_id) ? " AND tbquotationdetail.IdMember <> $supplier_id" : "" ;
//    $filter_value .= !empty($buyer_id) ? " AND tbquotation.IdBuyer = $buyer_id" : "" ;
//    $filter_value .= !empty($buyer_id) ? " AND tbquotationdetail.IdMember <> $buyer_id" : "" ;
//    if (!empty($buyer_id)) {
//       $tbmember_join_tbquotation = " AND tbmember.IdMember = tbquotation.IdSupplier ";
//    } elseif(!empty($supplier_id)){
//       $tbmember_join_tbquotation = " AND tbmember.IdMember = tbquotation.IdBuyer ";
//    }
//    $query = "SELECT
//    tbmember.*,
//    tbquotation.*,
//    count( tbquotationdetail.IdQuotation) as UnreadCount
//    FROM tbquotation INNER JOIN tbquotationdetail INNER JOIN tbmember
//    ON tbquotation.IdQuotation = tbquotationdetail.IdQuotation ".$tbmember_join_tbquotation."
//    WHERE 1=1 ".$filter_value."
//    GROUP by tbquotation.IdQuotation";
//    $query = $this->db->query($query);

//    return $query;
//  }
//  function get_quotation_detail(
//    $id_quotation = "", $id_quotation_detail="",$is_read=""
//  ){

//   //  $filter_value = " AND tbmember.IsSupplier = 1 ";
//   //  $filter_value = !empty($buyer_id) ? " AND IdBuyer = $buyer_id " : "" ;
//   //  $filter_value = !empty($supplier_id) ? " AND tbquotation.IdSupplier = $supplier_id " : "" ;
//    $filter_value = !empty($id_quotation) ? " AND tbquotationdetail.IdQuotation = $id_quotation " : "" ;
//    $filter_value .= !empty($id_quotation_detail) ? " AND tbquotationdetail.IdQuotationDetail = $id_quotation_detail " : "" ;
//    $filter_value .= is_numeric($is_read) ? " AND tbquotationdetail.IsRead = $is_read " : "" ;
//   //  if (!empty($buyer_id)) {
//   //     $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdSupplier";
//   //  } elseif(!empty($supplier_id)){
//   //     $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdBuyer";
//   //  }
//    $query = "SELECT
//    tbmember.ProfilImage,
//    tbmember.CompanyName,
//    tbquotationdetail.IdQuotation,
//    tbquotationdetail.IdQuotationDetail,
//    tbquotationdetail.IdMember,
//    tbquotationdetail.Message,
//    tbquotationdetail.DateSend,
//    tbquotationdetail.IsRead
//    FROM tbquotationdetail  INNER JOIN tbquotation INNER JOIN  tbmember
//    ON tbmember.IdMember = tbquotationdetail.IdMember AND
//    tbquotationdetail.IdQuotation = tbquotation.IdQuotation  WHERE 1=1 ".$filter_value.
//    " ORDER BY tbquotationdetail.DateSend ASC";
//      // echo $query;exit();
//    $query = $this->db->query($query);

//    return $query;

//  }
 function update_quotation_detail($data="", $id_quotation="", $quotation_detail_id=""){
   if (!empty($quotation_detail_id)) {
     $this->db->where('Id',$quotation_detail_id);
     $this->db->update('quotationdetail_tb',$data);
   }else {
     $this->db->where('Id',$id_quotation );
     $this->db->update('quotationdetail_tb',$data);
   }

 }

}

?>
