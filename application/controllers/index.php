<?php


/**
 * 
 **/
class Index extends MY_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $current_lang = $this->get_lang_type();
        $data = array();
        $data['sitebase'] = $this->get_index_info();

        $this->load->model('sitebase_model');
        $data['category_list'] = $this->sitebase_model->get_category_list($this->get_lang_type());
        $data['flash_curtain'] = $this->sitebase_model->get_index_flash_curtain($this->get_lang_type());

        $params = array('lang_type'=>$current_lang, 'page'=>1);
        $data['curtain_list'] = $this->sitebase_model->get_curtain_list($params);
        $this->load->view('index', $data);
    }
}
?>
