<?php
/**
*
*/
class M_product extends CI_Model{

  function get_product(
    $id_supplier = "",$id_product = "",$search_value = "",$offset= "",$limit= "",
    $group_by = "", $product_category_code = ""
  ){
    $filter_value = " AND tbmember.IsSupplier = 1 ";
    $filter_value .= !empty($id_supplier) ? " AND tbproduct.IdSupplier = $id_supplier " : "" ;
    $filter_value .= !empty($id_product) ? " AND tbproductpic.IdProduct = $id_product " : "" ;
    $filter_value .= !empty($product_category_code) ? " AND tbproductsubcategory.ProductCategoryCode = $product_category_code " : "" ;
    $filter_value .= !empty($search_value) ? " AND tbproduct.Name LIKE '%$search_value%' " : "" ;
    $filter_value .= !empty($search_value) ? " OR tbproductcategory.ProductCategory LIKE '%$search_value%' " : "";

    $limit = !empty($limit) ? " LIMIT $limit " : "" ;
    $offset = is_numeric($offset)? " OFFSET $offset " : "" ;
    $group_by = !empty($group_by) ? "GROUP BY $group_by " : "";

    $query = "SELECT
    tbmember.Email,
    tbmember.Location,
    tbmember.ZipCode,
    tbmember.City,
    tbmember.CompanyName,
    tbmember.Phone,
    tbmember.ProfilImage,
    tbproduct.Name,
    tbproduct.Unit,
    tbproduct.Price,
    tbproduct.ProductDescription,
    tbproduct.PkgDelivery,
    tbproduct.IdSupplier,
    tbproduct.SupplyAbility,
    tbproduct.PeriodSupplyAbility,
    tbproductcategory.ProductCategory,
    tbproductsubcategory.Code AS ProductSubCategoryCode,
    tbproductsubcategory.ProductCategoryCode,
    tbproductsubcategory.ProductSubCategory,
    tbproductpic.IdProductPic,
    tbproductpic.IdProduct,
    tbproductpic.FileName
    FROM tbmember INNER JOIN tbproduct INNER JOIN tbproductcategory INNER JOIN tbproductsubcategory INNER JOIN tbproductpic
    ON tbproduct.ProductSubCategoryCode = tbproductsubcategory.Code AND
    tbproductcategory.Code = tbproductsubcategory.ProductCategoryCode AND
    tbproduct.IdProduct = tbproductpic.IdProduct AND tbmember.IdMember = tbproduct.IdSupplier
    WHERE 1=1 ".$filter_value.$group_by.$limit.$offset;
    //  echo $query;exit();
    $query = $this->db->query($query);

    return $query;

  }

  function add_product($data,$product_pictures) {
    $this->db->insert('tbproduct',$data);
    $id_product = $this->db->insert_id();
    foreach ($product_pictures as $row => $value) {
      $product_pic_data = array("IdProduct" => $id_product,"FileName" => $value );
      $this->db->insert('tbproductpic', $product_pic_data);
    }
  }

  function get_top8_product(){
    $query = $this->db->query("SELECT
      tbmember.Email,
      tbmember.Location,
      tbmember.ZipCode,
      tbmember.City,
      tbmember.CompanyName,
      tbmember.Phone,
      tbmember.ProfilImage,
      tbproduct.Name,
      tbproduct.Unit,
      tbproduct.Price,
      tbproduct.IdSupplier,
      tbproduct.SupplyAbility,
      tbproduct.PeriodSupplyAbility,
      tbproductsubcategory.ProductSubCategory,
      tbproductpic.IdProduct,
      tbproductpic.FileName
      FROM tbmember INNER JOIN tbproduct INNER JOIN tbproductsubcategory INNER JOIN tbproductpic
      ON tbproduct.ProductSubCategoryCode = tbproductsubcategory.Code AND
      tbproduct.IdProduct = tbproductpic.IdProduct AND tbmember.IdMember = tbproduct.IdSupplier
      WHERE tbmember.IsSupplier = 1
      GROUP BY tbproductpic.IdProduct LIMIT 8"
    );
    return $query->result();
  }

  function edit_product($id_product,$data,$product_pictures) {
 		$this->db->where('IdProduct',$id_product );
 		$this->db->update('tbproduct',$data);
   foreach ($product_pictures as $row => $value) {
     $product_pic_data = array("IdProduct" => $id_product,"FileName" => $value );
     $this->db->insert('tbproductpic', $product_pic_data);
   }
  }

}

?>
