<?php

class Login_Model extends CI_Model{
	function __construct(){
		parent::__construct();
    }

    function get_table(){
        $table = "users";
        return $table;
    }

    function password_check($username, $password){
        
        $table = $this->get_table();
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get($table);
        $num_rows = $query->num_rows();

        if ($num_rows > 0){
            return TRUE;
        } else {
            return FALSE;
        }
            
    }

    function get_where_custom($col, $value){
        $table = $this->get_table();
        $this->db->where($col, $value);
        $query = $this->db->get($table);
        return $query;
    }
       
}