<?php

/**
 * 
 **/
class Test_Model extends MY_Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function test(){
        return $this->db->get('ad')->result();
    }
}
