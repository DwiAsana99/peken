<?php
/**
 *
 */
class M_support extends CI_Model{

  function get_support($filter_value=""){
    $support_code = isset($filter_value['support_code']) ? $filter_value['support_code'] : "" ;
    $id_member = isset($filter_value['id_member']) ? $filter_value['id_member'] : "" ;
    $is_closed = isset($filter_value['is_closed']) ? $filter_value['is_closed'] : "" ;
    $filter_value = " 1=1 ";
    $filter_value .= !empty($support_code) ? " AND tbsupport.SupportCode = $support_code " : "" ;
    $filter_value .= !empty($id_member) ? " AND tbmember.IdMember = $id_member " : "" ;
    $filter_value .= is_numeric($is_closed) ? " AND tbsupport.IsClosed = $is_closed " : "" ;
    echo $filter_value;exit();
    // $limit = !empty($limit) ? " LIMIT $limit " : "" ;
    // $offset = is_numeric($offset)? " OFFSET $offset " : "" ;
    // $group_by = !empty($group_by) ? "GROUP BY $group_by " : "";
    //
    // $query = "SELECT
    // tbmember.Email,
    // tbmember.Location,
    // tbmember.ZipCode,
    // tbmember.City,
    // tbmember.CompanyName,
    // tbmember.Phone,
    // tbmember.ProfilImage,
    // tbproduct.Name,
    // tbproduct.Unit,
    // tbproduct.Price,
    // tbproduct.ProductDescription,
    // tbproduct.PkgDelivery,
    // tbproduct.IdSupplier,
    // tbproduct.SupplyAbility,
    // tbproduct.PeriodSupplyAbility,
    // tbproduct.IsActive,
    // tbproductcategory.ProductCategory,
    // tbproductsubcategory.Code AS ProductSubCategoryCode,
    // tbproductsubcategory.ProductCategoryCode,
    // tbproductsubcategory.ProductSubCategory,
    // tbproductpic.IdProductPic,
    // tbproductpic.IdProduct,
    // tbproductpic.FileName
    // FROM tbmember INNER JOIN tbproduct INNER JOIN tbproductcategory INNER JOIN tbproductsubcategory INNER JOIN tbproductpic
    // ON tbproduct.ProductSubCategoryCode = tbproductsubcategory.Code AND
    // tbproductcategory.Code = tbproductsubcategory.ProductCategoryCode AND
    // tbproduct.IdProduct = tbproductpic.IdProduct AND tbmember.IdMember = tbproduct.IdSupplier
    // WHERE".$filter_value.$group_by.$limit.$offset;
    //  echo $query;exit();
    // $query = $this->db->query($query);
    //
    // return $query;
  }

}

?>
