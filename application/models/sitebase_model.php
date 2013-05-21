<?php


/**
 * 基础信息基类
 **/
class Sitebase_Model extends MY_Model{
    
    function __construct(){
        parent::__construct();
    }

    public function get_index_info($lang_type){
        $this->db->where('lang_type', $lang_type);
        $list = $this->db->get('index_info')->result();
        return current($list);
    }

    public function get_category_list($lang_type){
        $this->db->where('lang_type', $lang_type);
        $this->db->order_by('order_no');
        return $this->db->get('category')->result();
    }

    public function get_index_flash_curtain($lang_type){
        $this->db->join('category', 'fx_category.id=fx_curtain.category_id', 'inner');
        $this->db->where('fx_category.lang_type', $lang_type);
        $this->db->order_by('is_show_index', 'desc');
        $this->db->order_by('create_time', 'desc');
        return $this->db->get('curtain', 5)->result();
    }

    public function get_curtain_list($params){
        $this->db->select('fx_curtain.*');
        $this->db->join('category', 'fx_category.id=fx_curtain.category_id', 'inner');
        $this->db->order_by('create_time', 'desc');

        if(isset($params['lang_type']) && !empty($params['lang_type'])){
            $this->db->where('fx_category.lang_type', $params['lang_type']);
        }
        if(isset($params['category_id']) && !empty($params['category_id'])){
            $this->db->where('fx_curtain.category_id', $params['category_id']);
        }

        if(isset($params['page'])){
            if(empty($params['page'])){
                $params['page'] = 1;
            }
            if(!isset($params['page_size']) || empty($params['page_size'])){
                $params['page_size'] = 10; //默认每页大小为10行记录
            }

            $offset = ($params['page']-1)*$params['page_size'];
            $this->db->limit($params['page_size'], $offset);
        }

        return $this->db->get('curtain')->result();
    }

    public function get_curtain_list_count($params){
        
        $this->db->join('category', 'fx_category.id=fx_curtain.category_id', 'inner');
        $this->db->order_by('create_time', 'desc');

        if(isset($params['lang_type']) && !empty($params['lang_type'])){
            $this->db->where('fx_category.lang_type', $params['lang_type']);
        }
        if(isset($params['category_id']) && !empty($params['category_id'])){
            $this->db->where('fx_curtain.category_id', $params['category_id']);
        }

        return $this->db->get('curtain')->num_rows();
    }

    public function get_curtain_info($curtain_id){
        $this->db->where('id', $curtain_id);

        $list = $this->db->get('curtain')->result();
        return current($list);
    }
}
?>
