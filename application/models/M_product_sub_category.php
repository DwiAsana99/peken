<?php
/**
*
*/
class M_product_sub_category extends CI_Model{

  function get_product_sub_category($product_category_code="", $option_tag="",$selected=""){
    if (!empty($product_category_code) AND (!empty($option_tag) AND is_numeric($option_tag)) AND empty($selected) ) {
      $product_sub_category = "";
      $query = "SELECT * FROM tbproductsubcategory
      WHERE ProductCategoryCode = '$product_category_code'
      ORDER BY ProductSubCategory ASC";
      $query = $this->db->query($query);
      foreach ($query->result_array() as $data ){
        $product_sub_category .= "<option value='$data[Code]'>$data[ProductSubCategory]</option>";
      }
      return $product_sub_category;
    } elseif (!empty($product_category_code) AND (!empty($option_tag) AND is_numeric($option_tag)) AND !empty($selected)) {
      $product_sub_category = "";
      $query = "SELECT * FROM tbproductsubcategory
      WHERE ProductCategoryCode = '$product_category_code'
      ORDER BY ProductSubCategory ASC";
      $query = $this->db->query($query);
      foreach ($query->result_array() as $data ){

        if ($data['Code'] == $selected['product_sub_category_code']) {
          $product_sub_category .= "<option selected value='$selected[product_sub_category_code]'>$selected[product_sub_category]</option>";
        } else {
          $product_sub_category .= "<option value='$data[Code]'>$data[ProductSubCategory]</option>";
        }

      }
      return $product_sub_category;
    }
  }

  function get_product_sub_category_all(){
    $query = "SELECT * FROM tbproductsubcategory
    ORDER BY ProductSubCategory ASC";
    $query = $this->db->query($query);
    return $query;
  }

  function get_product_sub_category_query($product_sub_category_code='',$product_category_code='',$order_by="")
  {
    $filter_value = !empty($product_category_code) ? " AND tbproductsubcategory.ProductCategoryCode = $product_category_code " : "" ;
    $filter_value .= !empty($product_sub_category_code) ? " AND tbproductsubcategory.Code = $product_sub_category_code " : "" ;
    $query = "SELECT tbproductsubcategory.Code AS ProductSubCategoryCode,
    tbproductsubcategory.ProductCategoryCode,
    tbproductsubcategory.ProductSubCategory,
    tbproductcategory.ProductCategory
     FROM tbproductsubcategory INNER JOIN tbproductcategory
     ON tbproductcategory.Code = tbproductsubcategory.ProductCategoryCode
     WHERE 1=1 ".$filter_value.$order_by;
    $query = $this->db->query($query);
    return $query;
  }
  // function diatas digunakan untuk mencari product_sub_category.
  // hanya digunakan untuk sementara harus nya bisa dirapikan dengan function
  // get_product_sub_category
  function add_product_sub_category($data) {
    $this->db->insert('tbproductsubcategory',$data);
  }
  function edit_product_sub_category($data,$code) {
 			 $this->db->where('Code',$code );
 			 $this->db->update("tbproductsubcategory",$data);
  }
  // function generate_product_sub_category(){
  //
  // }

  // function edit_product_category_view($id) {
  // 	$query = $this->db->query("SELECT *
  // 														FROM tbproductcategory
  // 														WHERE IdProductCategory = $id
  // 	");
  //  	return $query->result();
  // }
  //
  // function edit_product_category_db($table,$data,$id) {
  // 			 $this->db->where('IdProductCategory',$id );
  // 			 $this->db->update($table,$data);
  // }
}

?>
