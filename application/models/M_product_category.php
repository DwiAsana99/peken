<?php
/**
 *
 */
class M_product_category extends CI_Model{
  protected $other_table_columns;
  protected $join_table;
  protected $filter_value;
  protected $group_by;
  protected $order_by;
  protected $limit;
  protected $offset;

  function set_search_product_category($rules = "") {
    $this->other_table_columns = !empty($rules['join']['other_table_columns']) ? $rules['join']['other_table_columns'] : "" ;
    $this->join_table = !empty($rules['join']['join_table']) ? $rules['join']['join_table'] : "" ;
    $this->group_by = !empty($rules['group_by']) ? " GROUP BY ".$rules['group_by'] : "" ;
    $this->order_by = !empty($rules['order_by']) ? " ORDER BY ".$rules['order_by'] : "" ;
    $this->limit = isset($rules['limit']) ? " LIMIT ".$rules['limit'] : "" ;
    $this->offset = isset($rules['offset'])  ? " OFFSET ".$rules['offset'] : "" ;
    $this->filter_value = isset($rules['filter_value']['product_category_code']) ? " AND productcategory_tb.Code = ".$rules['filter_value']['product_category_code'] : "" ;
  }

  function get_product_category(){
    $query = "SELECT productcategory_tb.* ".$this->other_table_columns."
    FROM productcategory_tb ".$this->join_table."
    WHERE 1=1 ".$this->filter_value.$this->group_by.$this->order_by.$this->limit.$this->offset;
    //echo $query;exit();
    $query = $this->db->query($query);
    return $query;
  }

  // function datas mungkin bisa menimbulkan bug pada user hak akses supplier
  function add_product_category($table,$data) {
			 $this->db->insert($table,$data);
	}

  function edit_product_category_view($code) {
		$query = $this->db->query("SELECT *
															FROM tbproductcategory
															WHERE ProductCategoryCode = $code
		");
	 	return $query->result();
	}


	function update_product_category($data,$code) {
 			 $this->db->where('Code',$code );
 			 $this->db->update("productcategory_tb",$data);
  }
}

?>
