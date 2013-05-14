<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model {
	/**
	 * 输入的查询字段
	 * @var array
	 */
	var $query_uri;
	
	/**
	 * 当前主键操作的值
	 * @var mix
	 */
	var $_id;
	
	/**
	 * 当前操作表的主键
	 * @var string
	 */
	var $_primary_name;
	
	/**
	 * 当前操作的表名
	 * @var string
	 */
	var $_table_name;
	
	function __construct()
	{
		parent::__construct();
		
		$this->load->database();
	}

	/**
	 * fetch_row
	 * 返回查询结果的一行记录
	 * @access public
	 * @param int $rows 是否第几行
	 * @param boole $return_array 是否返回数组，默认FALSE返回的是对像
	 */
	public function fetch_row($rows = '', $return_array = FALSE)
	{
		$query = $this->db->get($this->table_name());
		if ($query->num_rows() > 0) {
			if (! $return_array) {
				return $query->row($rows);
			} else {
				return $query->row_array($rows);
			}
		}
	}
	
	/**
	 * fetch_result
	 *
	 * @access public
	 * @param boole $return_array 是否返回数组，默认FALSE返回的是对像
	 */
	public function fetch_result($return_array = FALSE)
	{
		if (isset($this->query_uri['sort']) && $this->query_uri['order']) $this->db->order_by($this->query_uri['sort'] , $this->query_uri['order']);
		if ($this->query_uri['rows'] > 0) $this->db->limit($this->query_uri['rows'] , $this->query_uri['rows'] * ($this->query_uri['page'] - 1));
		
		$query = $this->db->get($this->table_name());
		if ($query->num_rows() > 0) {
			if (! $return_array) {
				return $query->result();
			} else {
				return $query->result_array();
			}
		} else {
			return array();
		}
	}
	
	/**
	 * fetch_count
	 * 返回查询所得的总行数
	 * @access public
	 */
	public function fetch_count()
	{
		return $this->db->count_all_results($this->table_name());
	}

	public function set_id($val)
	{
		$this->_id = (int)$val;
	}
	
	/**
	 * 返回表名
	 * @return string
	 */
	protected function table_name()
	{
		return $this->_table_name;
	}
	
	/**
	 * Insert
	 *
	 * @access public
	 * @param string $name Table Name
	 * @param array $data Data to insert
	 * @return int|false
	 */
	public function insert($data)
	{
		$this->db->insert($this->table_name(), $data);
		$this->_id = $this->db->insert_id();
		return $this->_id ? $this->_id : false;
	}
	
	/**
	 * 批量插入
	 * @param unknown_type $data
	 */
	public function insert_batch($data){
		$this->db->insert_batch($this->table_name(), $data);
		
		return $this->db->affected_rows();
	}
	
	public function delete($where = null){
		//为空将使用 id 为键名 _id 为值的条件删除
		if (!$where){
			$where = array('id'=>$this->_id);
		}
		
		$this->db->delete($this->_table_name , $where);
		
		$rows = $this->db->affected_rows();
		return $rows ? $rows : false;
	}

    public function delete_by_primary_name($p_name){
        $this->db->delete($this->_table_name, array($this->_primary_name => $p_name));
        $rows =  $this->db->affected_rows();
        return $rows ? $rows : false;
    }
	
	/**
	 * Update
	 * - 当 $where 为 '' 空字符串时使用 id 为条件
	 * - 当 $where 为 null 时 方法内不设置条件，方法外的$this->db->where 均有效
	 * @access public
	 * @param $values 数据
	 * @param string $where 条件
	 */
	public function update($values, $where = null)
	{
		if ($where !== null) {
			if (is_array($where)) {
				$this->db->where($where);
			}
		} else {
			$this->db->where(array($this->_primary_name => $this->_id));
		}
		$this->db->update($this->table_name(), $values);
		$rows = $this->db->affected_rows();
		return $rows ? $rows : false;
	}
	
	public function cache_found_rows(){
		$found_row = $this->db->query('SELECT FOUND_ROWS() as rows')->row();
	
		return $found_row->rows ? $found_row->rows : 0;
	}
	public function count_rows($sql){
		$found_row = $this->db->query('SELECT count(*) as rows from ('.$sql.') as tt')->row();
		return $found_row->rows ? $found_row->rows : 0;
	}
}
// END MY_Model Class

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */
