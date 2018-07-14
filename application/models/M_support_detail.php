<?php
/**
 *
 */
class M_support_detail extends CI_Model{
  function add_support_detail($data){
    $this->db->insert('tbsupportdetail',$data);
    return $this->db->insert_id();
  }
  function get_support_detail($filter_value="", $order_by=""){
    $support_code = isset($filter_value['support_code']) ? $filter_value['support_code'] : "" ;
    $id_support_detail = isset($filter_value['id_support_detail']) ? $filter_value['id_support_detail'] : "" ;
    // $id_member = isset($filter_value['id_member']) ? $filter_value['id_member'] : "" ;
    // $is_closed = isset($filter_value['is_closed']) ? $filter_value['is_closed'] : "" ;
    $filter_value = " 1=1 ";
    $filter_value .= !empty($support_code) ? " AND tbsupportdetail.SupportCode = '$support_code' " : "" ;
    $filter_value .= !empty($id_support_detail) ? " AND tbsupportdetail.IdSupportDetail = $id_support_detail " : "" ;
    // $filter_value .= !empty($id_member) ? " AND tbmember.IdMember = $id_member " : "" ;
    // $filter_value .= is_numeric($is_closed) ? " AND tbsupport.IsClosed = $is_closed " : "" ;
    $order_by = !empty($order_by) ? " ORDER BY $order_by " : "";
    // echo $filter_value;exit();
    // $limit = !empty($limit) ? " LIMIT $limit " : "" ;
    // $offset = is_numeric($offset)? " OFFSET $offset " : "" ;

    $query = "SELECT tbmember.Email,
    tbmember.Location,
    tbmember.ZipCode,
    tbmember.City,
    tbmember.CompanyName,
    tbmember.Phone,
    tbmember.ProfilImage,
    tbmember.IsSupplier,
    tbsupportdetail.*
    FROM  tbsupportdetail INNER JOIN tbmember
    ON tbsupportdetail.IdMember = tbmember.IdMember
    WHERE".$filter_value.$order_by;
     //echo $query;exit();

    $query = $this->db->query($query);

    return $query;
  }

}

?>
