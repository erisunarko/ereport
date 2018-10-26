<?php
	
	class Getuser_model extends CI_Model 
	{
		public function get_user_data()
		{
			$userId 	= $_SESSION['userData']['user_id'];
			$query		= $this->db->get_where('tb_users', array('employee_id' => $userId));
			return $query->result_array();
		}
			
	}

?>