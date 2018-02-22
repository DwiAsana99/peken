<?php
/**
 *
 */
class M_quotation_detail extends CI_Model{
 function add_quotation_detail($data){
   $this->db->insert('tbquotationdetail',$data);
   return $this->db->insert_id();
 }
 function get_unread_qutation_detail($id_supplier='',$id_buyer='')
 {
   $filter_value = " AND tbquotationdetail.IsRead = 0 ";
   $filter_value .= !empty($id_supplier) ? " AND tbquotation.IdSupplier = $id_supplier" : "" ;
   $filter_value .= !empty($id_supplier) ? " AND tbquotationdetail.IdMember <> $id_supplier" : "" ;
   $filter_value .= !empty($id_buyer) ? " AND tbquotation.IdBuyer = $id_buyer" : "" ;
   $filter_value .= !empty($id_buyer) ? " AND tbquotationdetail.IdMember <> $id_buyer" : "" ;
   if (!empty($id_buyer)) {
      $tbmember_join_tbquotation = " AND tbmember.IdMember = tbquotation.IdSupplier ";
   } elseif(!empty($id_supplier)){
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
   $id_quotation = "", $id_quotation_detail=""
 ){

  //  $filter_value = " AND tbmember.IsSupplier = 1 ";
  //  $filter_value = !empty($id_buyer) ? " AND IdBuyer = $id_buyer " : "" ;
  //  $filter_value = !empty($id_supplier) ? " AND tbquotation.IdSupplier = $id_supplier " : "" ;
   $filter_value = !empty($id_quotation) ? " AND tbquotationdetail.IdQuotation = $id_quotation " : "" ;
   $filter_value .= !empty($id_quotation_detail) ? " AND tbquotationdetail.IdQuotationDetail = $id_quotation_detail " : "" ;
  //  if (!empty($id_buyer)) {
  //     $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdSupplier";
  //  } elseif(!empty($id_supplier)){
  //     $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdBuyer";
  //  }
   $query = "SELECT
   tbmember.ProfilImage,
   tbmember.CompanyName,
   tbquotationdetail.IdQuotation,
   tbquotationdetail.IdMember,
   tbquotationdetail.Message,
   tbquotationdetail.DateSend


   FROM tbquotationdetail  INNER JOIN tbquotation INNER JOIN  tbmember
   ON tbmember.IdMember = tbquotationdetail.IdMember AND
   tbquotationdetail.IdQuotation = tbquotation.IdQuotation  WHERE 1=1 ".$filter_value.
   " ORDER BY tbquotationdetail.DateSend ASC";
    // echo $query;exit();
   $query = $this->db->query($query);

   return $query;

 }
 function update_quotation_detail($data="", $id_quotation=""){
   $this->db->where('IdQuotation',$id_quotation );
   $this->db->update('tbquotationdetail',$data);
 }
}

?>
