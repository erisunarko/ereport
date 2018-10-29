<?php
	
	class Updateticket_model extends CI_Model 
	{
		public function update_ticket($id)
		{
			date_default_timezone_set('Asia/Jakarta');
			$data = array(
					'service_by'	=> $this->input->post('service_by'),
					'progress'		=> $this->input->post('progress'),	
					'status'		=> $this->input->post('status'),
					'due_date'		=> $this->input->post('duedate'),
					'date_modified'	=> date('Y-m-d H:i:s')
				);
			
			$this->db->where('ticket_id', $id);
			
			$this->db->update('tb_tickets', $data);
			
			$res = $this->db->affected_rows();

			if ($res > 0)
			{
				return 'success';
			}
			else
			{
				return 'failed';
			}
		}
		
		public function filter_ticket()
		{
			date_default_timezone_set('Asia/Jakarta');

			$start_date 	= $this->input->post('start_date');

			$end_date	 	= $this->input->post('end_date');

			$this->db->where('date_created BETWEEN "'. date('Y-m-d', strtotime($start_date)). '" and "'. date('Y-m-d', strtotime($end_date)).'"');

			$query 	= $this->db->get('tb_tickets');
			
			return $query->result_array();

		}
	}

?>