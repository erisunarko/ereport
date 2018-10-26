<?php
	
	class Getticket_model extends CI_Model 
	{
		public function get_ticket()
		{
			$query		= $this->db->get('tb_tickets');			
			return $query->result_array();
		}
			
	}

?>