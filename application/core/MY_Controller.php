<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 所有控制器的父类
 * 
 * @author		Leo
 * @version		0.0.1
 * @copyright	Copyright (c) 2008 - 2013, KuaiZi, Inc.
 * @license		http://www.kuaizitech.com
 * @link		http://www.kuaizitech.com
 */
class MY_Controller extends CI_Controller{
	/**
	 * @var CI_Smarty
	 */
	var $smarty;
	
	/**
	 * @var CI_Config
	 */
	var $config;
	
	/**
	 * @var CI_Loader
	 */
	var $load;
	/**
	 * @var CI_DB_active_record
	 */
	var $db;
	/**
	 * @var CI_Calendar
	 */
	var $calendar;
	/**
	 * @var Email
	 */
	var $email;
	/**
	 * @var CI_Encrypt
	 */
	var $encrypt;
	/**
	 * @var CI_Ftp
	 */
	var $ftp;
	/**
	 * @var CI_Hooks
	 */
	var $hooks;
	/**
	 * @var CI_Image_lib
	 */
	var $image_lib;
	/**
	 * @var CI_Language
	 */
	var $language;
	/**
	 * @var CI_Log
	 */
	var $log;
	/**
	 * @var CI_Output
	 */
	var $output;
	/**
	 * @var CI_Pagination
	 */
	var $pagination;
	/**
	 * @var CI_Parser
	 */
	var $parser;
	/**
	 * @var CI_Session
	 */
	var $session;
	/**
	 * @var CI_Sha1
	 */
	var $sha1;
	/**
	 * @var CI_Table
	 */
	var $table;
	/**
	 * @var CI_Trackback
	 */
	var $trackback;
	/**
	 * @var CI_Unit_test
	 */
	var $unit;
	/**
	 * @var CI_Upload
	 */
	var $upload;
	/**
	 * @var MY_URI
	 */
	var $uri;
	/**
	 * @var CI_User_agent
	 */
	var $agent;
	/**
	 * @var CI_Validation
	 */
	var $validation;
	/**
	 * @var CI_Xmlrpc
	 */
	var $xmlrpc;
	/**
	 * @var CI_Zip
	 */
	var $zip;
	
	/**
	 * 权限控制
	 * @var Acl
	 */
	var $acl;
	
	/**
	 * 输入类
	 * @var MY_Input
	 */
	var $input;
	
	/**
	 * 请求字段
	 * @var array
	 */
	var $query_uri;
	
	/**
	 * 是否需要检查权限
	 * @var boolean
	 */
	var $is_check = TRUE;
	/**
	 * tmp 规定此控制器属于什么角色的控制器
	 * @var unknown_type
	 */
	var $role = '';
	
	var $error = array();
	
	public function __construct(){
		parent::__construct();
		$this->lang->load('error', 'chinese');

	}
	
    public function get_index_info(){
        $lang_type = $this->get_lang_type();
        $this->load->model('sitebase_model');
        return $this->sitebase_model->get_index_info($lang_type);
    }

    public function get_lang_type(){
        $lang_type = $this->session->userdata('lang_type');
        if($lang_type <= 0){
            $lang_type = 1; //默认中文
            $this->session->set_userdata('lang_type', $lang_type);
        }

        return $lang_type;
    }

	/**
	 * 输出 view 包含的基础 html
	 * 
	 * @return multitype:void Ambigous <void, string>
	 */
	public function _ext(){
		$identify = $this->acl->identify();
		$method = '_ext_' . $identify;
		
		return $this->$method();
	}
	
	/**
	 * 系统管理下基础 html
	 * @return multitype:void Ambigous <string, boolean> Ambigous <string, boolean, multitype:> Ambigous <void, string>
	 */
	public function _ext_admin(){
		return array(
				'header'	=> $this->load->view('admin/header' , array() , true),
				'footer'	=> $this->load->view('admin/footer' , array() ,true)
		);
	}
	
	/**
	 * 错误输出
	 * 
	 * @return multitype:void Ambigous <string, boolean>
	 */
	public function __error(){
		if ($this->router->is_ajax()){
			json(array('error'=>true , 'reason'=>array('sessionExpired'=>1)));
		}
		else{
			if (strlen($this->input->get('_')) == 13)
			{
				$url = '/login/relogin';
			}
			else
			{
				$url = '/login/admin';
			}
			redirect($url);
		}
	}
	
	/**
	 * 输出前段回调的json数据
	 * @param array $data
	 */
	public function __callback($data=array()){
		$reason = array();
		
		if (!empty($this->error)){
			foreach ($this->error as $error){
				$config_lang = $this->lang->line($error);
				
				if ($config_lang){
					$reason[$error] = $this->lang->line($error);
				}else {
					$reason[$error] = $error;
				}
				
			}
		}
		
		echo json_encode(array('error'=>!empty($reason), 'reason'=>$reason, 'data'=>$data));
		exit;
	}
}

// END MY_Controller Class

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */
