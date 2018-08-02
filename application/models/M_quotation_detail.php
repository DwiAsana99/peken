<?php
/**
 *
 */
class M_quotation_detail extends CI_Model{
 function add_quotation_detail($data){
   $this->db->insert('tbquotationdetail',$data);
   return $this->db->insert_id();
 }
 function get_unread_qutation_detail($supplier_id='',$buyer_id='')
 {
   $tbmember_join_tbquotation = "";
   $filter_value = " AND tbquotationdetail.IsRead = 0 ";
   $filter_value .= !empty($supplier_id) ? " AND tbquotation.IdSupplier = $supplier_id" : "" ;
   $filter_value .= !empty($supplier_id) ? " AND tbquotationdetail.IdMember <> $supplier_id" : "" ;
   $filter_value .= !empty($buyer_id) ? " AND tbquotation.IdBuyer = $buyer_id" : "" ;
   $filter_value .= !empty($buyer_id) ? " AND tbquotationdetail.IdMember <> $buyer_id" : "" ;
   if (!empty($buyer_id)) {
      $tbmember_join_tbquotation = " AND tbmember.IdMember = tbquotation.IdSupplier ";
   } elseif(!empty($supplier_id)){
      $tbmember_join_tbquotation = " AND tbmember.IdMember = tbquotation.IdBuyer ";
   }
   $query = "SELECT
   tbmember.*,
   tbquotation.*,
   count( tbquotationdetail.IdQuotation) as UnreadCount
   FROM tbquotation INNER JOIN tbquotationdetail INNER JOIN tbmember
   ON tbquotation.IdQuotation = tbquotationdetail.IdQuotation ".$tbmember_join_tbquotation."
   WHERE 1=1 ".$filter_value."
   GROUP by tbquotation.IdQuotation";
   $query = $this->db->query($query);

   return $query;
 }
 function get_quotation_detail(
   $id_quotation = "", $id_quotation_detail="",$is_read=""
 ){

  //  $filter_value = " AND tbmember.IsSupplier = 1 ";
  //  $filter_value = !empty($buyer_id) ? " AND IdBuyer = $buyer_id " : "" ;
  //  $filter_value = !empty($supplier_id) ? " AND tbquotation.IdSupplier = $supplier_id " : "" ;
   $filter_value = !empty($id_quotation) ? " AND tbquotationdetail.IdQuotation = $id_quotation " : "" ;
   $filter_value .= !empty($id_quotation_detail) ? " AND tbquotationdetail.IdQuotationDetail = $id_quotation_detail " : "" ;
   $filter_value .= is_numeric($is_read) ? " AND tbquotationdetail.IsRead = $is_read " : "" ;
  //  if (!empty($buyer_id)) {
  //     $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdSupplier";
  //  } elseif(!empty($supplier_id)){
  //     $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdBuyer";
  //  }
   $query = "SELECT
   tbmember.ProfilImage,
   tbmember.CompanyName,
   tbquotationdetail.IdQuotation,
   tbquotationdetail.IdQuotationDetail,
   tbquotationdetail.IdMember,
   tbquotationdetail.Message,
   tbquotationdetail.DateSend,
   tbquotationdetail.IsRead
   FROM tbquotationdetail  INNER JOIN tbquotation INNER JOIN  tbmember
   ON tbmember.IdMember = tbquotationdetail.IdMember AND
   tbquotationdetail.IdQuotation = tbquotation.IdQuotation  WHERE 1=1 ".$filter_value.
   " ORDER BY tbquotationdetail.DateSend ASC";
     // echo $query;exit();
   $query = $this->db->query($query);

   return $query;

 }
 function update_quotation_detail($data="", $id_quotation="", $id_quotation_detail=""){
   if (!empty($id_quotation_detail)) {
     $this->db->where('IdQuotationDetail',$id_quotation_detail);
     $this->db->update('tbquotationdetail',$data);
   }else {
     $this->db->where('IdQuotation',$id_quotation );
     $this->db->update('tbquotationdetail',$data);
   }

 }

}

?>
