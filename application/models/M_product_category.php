<?php
/**
 *
 */
class M_product_category extends CI_Model{
  function get_product_category($product_category_code = ""){
    $filter_value = !empty($product_category_code) ? " AND Code = $product_category_code " : "" ;
    $query = $this->db->query('SELECT * FROM tbproductcategory
    WHERE 1=1 '.$filter_value);
    //$query = $this->db->query($query);
    return $query;
  }
  // function datas mungkin bisa menimbulkan bug pada user hak akses supplier
  function add_product_category_db($table,$data) {
			 $this->db->insert($table,$data);
	}

  function edit_product_category_view($code) {
		$query = $this->db->query("SELECT *
															FROM tbproductcategory
															WHERE ProductCategoryCode = $code
		");
	 	return $query->result();
	}


	function edit_product_category_db($data,$code) {
 			 $this->db->where('ProductCategoryCode',$code );
 			 $this->db->update("tbproductcategory",$data);
  }
}

?>
