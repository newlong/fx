<?php


/**
 * 
 **/
class Product extends MY_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function product_list(){
        $current_lang = $this->get_lang_type();
        $data = array();
        $data['sitebase'] = $this->get_index_info();

        $this->load->model('sitebase_model');
        $data['category_list'] = $this->sitebase_model->get_category_list($this->get_lang_type());
        $data['flash_curtain'] = $this->sitebase_model->get_index_flash_curtain($this->get_lang_type());

        $category_id = $this->input->get_post('cate_id', true);
        $page = $this->input->get_post('page', true);
        $params = array('lang_type'=>$current_lang, 'page'=>$page, 'category_id'=>$category_id);
        $params['page_size'] = 12;
        $data['curtain_list'] = $this->sitebase_model->get_curtain_list($params);
        $data['rec_count'] = $this->sitebase_model->get_curtain_list_count($params);
        $data['page'] = !empty($params['page'])?$params['page']:1;

        $cur_cate = $this->get_category($data['category_list'], $category_id);
        $data['cur_category_name'] = $cur_cate ? $cur_cate->cate_name : '';
        $data['cur_category_id'] = $category_id;
        $this->load->view('product_list', $data);
    }

    public function products(){
        $category_id = $this->input->get_post('cate_id', true);
        $page = $this->input->get_post('page', true);

        $this->load->model('sitebase_model');
        $current_lang = $this->get_lang_type();
        $params = array('lang_type'=>$current_lang, 'page'=>$page, 'category_id'=>$category_id);
        $params['page_size'] = 12;
        $data['curtain_list'] = $this->sitebase_model->get_curtain_list($params);
        $data['rec_count'] = $this->sitebase_model->get_curtain_list_count($params);
        $data['page'] = !empty($params['page']) ? $params['page'] : 1;

        echo json_encode($data);
    }

    public function product_detail(){
        $curtain_id = $this->input->get_post('curtain_id', true);

        $current_lang = $this->get_lang_type();
        $data = array();
        $data['sitebase'] = $this->get_index_info();

        $this->load->model('sitebase_model');
        $data['category_list'] = $this->sitebase_model->get_category_list($this->get_lang_type());
        $data['flash_curtain'] = $this->sitebase_model->get_index_flash_curtain($this->get_lang_type());

        $data['curtain_info'] = $this->sitebase_model->get_curtain_info($curtain_id);
        //var_dump($data['curtain_info']);
        $cur_cate = $this->get_category($data['category_list'], $data['curtain_info']->category_id);
        $data['cur_category_name'] = $cur_cate ? $cur_cate->cate_name : '';
        $this->load->view('product_detail', $data);
    }

    private function get_category($category_list, $cate_id){
        foreach($category_list as $v){
            if($v->id == $cate_id){
                return $v;
            }
        }

        return false;
    }
}
?>
