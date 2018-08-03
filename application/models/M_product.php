<?php
/**
*
*/
class M_product extends CI_Model{
  protected $other_table_columns;
  protected $join_table;
  protected $filter_value;
  protected $group_by;
  protected $order_by;
  protected $limit;
  protected $offset;

  function set_search_product($rules) {
    $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
    $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
    $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
    $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
    $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
    $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
    $this->filter_value = isset($rules['filter_value']['is_published']) ? " AND product_tb.IsPublished = ".$rules['filter_value']['is_published'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['product_id']) ? " AND product_tb.Id = ".$rules['filter_value']['product_id'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['supplier_id']) ? " AND product_tb.SupplierId = ".$rules['filter_value']['supplier_id'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['product_category_code']) ? " AND productsubcategory_tb.ProductCategoryCode = ".$rules['filter_value']['product_category_code'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['product_sub_category_code']) ? " AND product_tb.ProductSubCategoryCode = ".$rules['filter_value']['product_sub_category_code'] : "" ;
    $this->filter_value .= isset($rules['filter_value']['search_value']) ? " AND product_tb.Name LIKE "."'%".$rules['filter_value']['search_value']."%'"  : "" ;
  }

  function set_search_product_pic($rules) {
    $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
    $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
    $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
    $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
    $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
    $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
    // $this->filter_value = isset($rules['filter_value']['is_published']) ? " AND product_tb.IsPublished = ".$rules['filter_value']['is_published'] : "" ;
    $this->filter_value = isset($rules['filter_value']['product_id']) ? " AND productpic_tb.ProductId = ".$rules['filter_value']['product_id'] : "" ;

  }

  function get_product() {
    $query = "SELECT product_tb.* ".$this->other_table_columns."
    FROM product_tb ".$this->join_table."
    WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
    //echo $query;exit();

    $query = $this->db->query($query);
    return $query;
  }

  function get_product_pic() {
    $query = "SELECT productpic_tb.* ".$this->other_table_columns."
    FROM productpic_tb ".$this->join_table."
    WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
    //echo $query;exit();

    $query = $this->db->query($query);
    return $query;
  }


  // function get_product_lama(
  //   $supplier_id = "",$product_id = "",$search_value = "",$offset= "",$limit= "",
  //   $group_by = "", $product_category_code = "",$product_sub_category_code = "", $is_active=""
  // ){
  //   $filter_value = " AND tbmember.IsSupplier = 1 ";
  //   $filter_value .= !empty($supplier_id) ? " AND tbproduct.IdSupplier = $supplier_id " : "" ;
  //   $filter_value .= !empty($is_active) ? " AND tbproduct.IsActive = $is_active " : "" ;
  //   $filter_value .= !empty($product_id) ? " AND tbproductpic.IdProduct = $product_id " : "" ;
  //   $filter_value .= !empty($product_category_code) ? " AND tbproductsubcategory.ProductCategoryCode = $product_category_code " : "" ;
  //   $filter_value .= !empty($product_sub_category_code) ? " AND tbproduct.ProductSubCategoryCode = $product_sub_category_code " : "" ;
  //   $filter_value .= !empty($search_value) ? " AND tbproduct.Name LIKE '%$search_value%' " : "" ;
  //   $filter_value .= !empty($search_value) ? " OR tbproductcategory.ProductCategory LIKE '%$search_value%' " : "";
  //   $filter_value .= !empty($search_value) ? " OR tbproductsubcategory.ProductSubCategory LIKE '%$search_value%' " : "";

  //   $limit = !empty($limit) ? " LIMIT $limit " : "" ;
  //   $offset = is_numeric($offset)? " OFFSET $offset " : "" ;
  //   $group_by = !empty($group_by) ? "GROUP BY $group_by " : "";

  //   $query = "SELECT
  //   tbmember.Email,
  //   tbmember.Location,
  //   tbmember.ZipCode,
  //   tbmember.City,
  //   tbmember.CompanyName,
  //   tbmember.Phone,
  //   tbmember.ProfilImage,
  //   tbproduct.Name,
  //   tbproduct.Unit,
  //   tbproduct.Price,
  //   tbproduct.ProductDescription,
  //   tbproduct.PkgDelivery,
  //   tbproduct.IdSupplier,
  //   tbproduct.SupplyAbility,
  //   tbproduct.PeriodSupplyAbility,
  //   tbproduct.IsActive,
  //   tbproductcategory.ProductCategory,
  //   tbproductsubcategory.Code AS ProductSubCategoryCode,
  //   tbproductsubcategory.ProductCategoryCode,
  //   tbproductsubcategory.ProductSubCategory,
  //   tbproductpic.IdProductPic,
  //   tbproductpic.IdProduct,
  //   tbproductpic.FileName
  //   FROM tbmember INNER JOIN tbproduct INNER JOIN tbproductcategory INNER JOIN tbproductsubcategory INNER JOIN tbproductpic
  //   ON tbproduct.ProductSubCategoryCode = tbproductsubcategory.Code AND
  //   tbproductcategory.Code = tbproductsubcategory.ProductCategoryCode AND
  //   tbproduct.IdProduct = tbproductpic.IdProduct AND tbmember.IdMember = tbproduct.IdSupplier
  //   WHERE 1=1 ".$filter_value.$group_by.$limit.$offset;
  //   //  echo $query;exit();
  //   $query = $this->db->query($query);

  //   return $query;

  // }

  function add_product($data,$product_pictures) {
    $this->db->insert('product_tb',$data);
    $product_id = $this->db->insert_id();
    foreach ($product_pictures as $row => $value) {
      $product_pic_data = array("ProductId" => $product_id,"FileName" => $value );
      $this->db->insert('productpic_tb', $product_pic_data);
    }
  }

  function get_top8_product($is_active=""){
    $filter_value = !empty($is_active) ? " AND tbproduct.IsActive = $is_active " : "" ;
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
      WHERE tbmember.IsSupplier = 1".$filter_value."
      GROUP BY tbproductpic.IdProduct LIMIT 8"
    );
    return $query->result();
  }

  function update_product($product_id,$data,$product_pictures) {
 		$this->db->where('Id',$product_id );
 		$this->db->update('product_tb',$data);
   foreach ($product_pictures as $row => $value) {
     $product_pic_data = array("ProductId" => $product_id,"FileName" => $value );
     $this->db->insert('productpic_tb', $product_pic_data);
   }
  }

}

?>
