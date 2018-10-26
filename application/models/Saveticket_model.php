<?php
	
	class Saveticket_model extends CI_Model 
	{
		public function save_ticket()
		{
			date_default_timezone_set('Asia/Jakarta');

			$data = array(
					'title'			=> $this->input->post('ticket_title'),
					'description'	=> $this->input->post('ticket_desc'),
					'service_by'	=> 'not yet processed',
					'progress'	=> 'not yet processed',
					'status'		=> 'open',
					'date_created'	=> date('Y-m-d H:i:s'),
					'date_modified'	=> date('Y-m-d H:i:s')
				);

			$this->db->insert('tb_tickets', $data);
			
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
			
	}

?>