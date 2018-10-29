<?php
	
	class Getticket_model extends CI_Model 
	{
		public function get_ticket()
		{
			$query		= $this->db->get('tb_tickets');			
			return $query->result_array();
		}
		
		public function get_ticket_detail($id)
		{
			$query		= $this->db->get_where('tb_tickets', array('ticket_id' => $id));			
			return $query->result_array();
		}	
	}

?>