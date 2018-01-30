<?php
/**
 *
 */
class M_quotation extends CI_Model{
 function add_quotation($data){
   $this->db->insert('tbquotation',$data);
 }
 function get_quotation(
   $id_buyer = "",$id_supplier = "",$id_quotation = ""
 ){
  //  $filter_value = " AND tbmember.IsSupplier = 1 ";
   $filter_value = !empty($id_buyer) ? " AND IdBuyer = $id_buyer " : "" ;
   $filter_value = !empty($id_supplier) ? " AND tbquotation.IdSupplier = $id_supplier " : "" ;
   $filter_value = !empty($id_quotation) ? " AND tbquotation.IdQuotation = $id_quotation " : "" ;
   if (!empty($id_buyer)) {
      $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdSupplier";
   } elseif(!empty($id_supplier)){
      $tbmember_join_tbquotation = "AND tbmember.IdMember = tbquotation.IdBuyer";
   }
   $query = "SELECT *
   FROM tbquotation INNER JOIN tbproduct INNER JOIN tbmember
   ON tbproduct.IdProduct = tbquotation.IdProduct ".$tbmember_join_tbquotation." WHERE 1=1 ".$filter_value.
   " ORDER BY DateSend DESC";
     // echo $query;exit();
   $query = $this->db->query($query);

   return $query;

 }
}

?>
