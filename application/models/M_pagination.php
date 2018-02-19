<?php
/**
*
*/
class M_pagination extends CI_Model{
  protected $page_query_string;
  protected $per_page;
  protected $use_page_numbers;
  protected $cur_tag_open;
  protected $cur_tag_close;
  protected $next_link;
  protected $prev_link;
  protected $base_url;
  protected $total_rows;
  protected $num_links;
  function set_config(
    $page_query_string = "",
    $per_page = "",
    $use_page_numbers = "",
    $cur_tag_open = "",
    $cur_tag_close = "",
    $next_link = "",
    $prev_link = "",
    $base_url = "",
    $num_rows = ""
  ){
    $this->page_query_string = !empty($page_query_string) ? $page_query_string : TRUE ;
    if(!empty($per_page)){$this->per_page = $per_page;}
    $this->use_page_numbers = !empty($use_page_numbers) ? $use_page_numbers : TRUE ;
    $this->cur_tag_open = !empty($cur_tag_open) ?  $cur_tag_open : '&nbsp;<li class="active"><span>';
    $this->cur_tag_close = !empty($cur_tag_close) ? $cur_tag_close : '</span></li>' ;
    $this->next_link = !empty($next_link) ? $next_link : 'Next' ;
    $this->prev_link = !empty($prev_link) ? $prev_link : 'Prev' ;
    if(!empty($base_url)){$this->base_url = base_url().$base_url;}
    if(!empty($num_rows)){
      $this->total_rows = $num_rows;
      $this->num_links = $num_rows;
    }
  }
  function get_config(){
    $config['num_tag_open'] = '<li class="hidden-xs">';
    $config['num_tag_close'] = '</li>';
    // $config['full_tag_open'] = '<li><span>';
    // $config['full_tag_close'] = '</span></li>';
    $config['first_link'] = 'First Page';
    $config['first_tag_open'] = '<li class="hidden-xs"><span>';
    $config['first_tag_close'] = '</span></li>';
    $config['last_link'] = 'Last Page';
    $config['last_tag_open'] = '<li class="hidden-xs"><span>';
    $config['last_tag_close'] = '</span></li>';

    $config['next_tag_open'] = '<li><span>';
    $config['next_tag_close'] = '</span></li>';

    $config['prev_tag_open'] = '<li><span>';
    $config['prev_tag_close'] = '</span></li>';
    $config['page_query_string'] = $this->page_query_string;
    $config["per_page"] = $this->per_page;
    $config['use_page_numbers'] = $this->use_page_numbers;
    $config['cur_tag_open'] = $this->cur_tag_open;
    $config['cur_tag_close'] = $this->cur_tag_close;
    $config['next_link'] = $this->next_link;
    $config['prev_link'] = $this->prev_link;
    $config["base_url"] =$this->base_url;
    $config["total_rows"] =$this->total_rows;
    $config['num_links'] =1;//$this->num_links;
    return $config;
  }
  function get_offset($page="") {
    if(empty($page)){
      $offset = 0;
    }      else{
      $offset = $this->per_page*($page-1) ;
    }
    return $offset;
  }
  // function get_totalrows_numlinks_config($num_rows,$config){
  //   $config["total_rows"] = $num_rows;
  //   $config['num_links'] = $num_rows;
  //   return $config;
  // }
}

?>
