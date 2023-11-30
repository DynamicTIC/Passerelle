<?php
	class Users_model extends CI_Model {
		function __construct(){
			parent::__construct();
			$this->load->database();
		}
 
		public function login($email){
			$query = $this->db->get_where('users', array('email'=>$email));
			return $query->row_array();
		}

		public function pwd($email, $password){
			$query = $this->db->get_where('users', array('email'=>$email,'password'=>$password));
			return $query->row_array();
		}

		// function get_data($fname, $email){   
		// 	$this->db->select('id, fname, email');     
		// 	$this->db->from('users');     
		// 	$this->db->where('fname', $fname);
		// 	$query = $this->db->get();              

		// 	return $query->result();
		// } 
 
	}
?>