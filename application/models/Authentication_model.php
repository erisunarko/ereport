<?php
	
	class Authentication_model extends CI_Model 
	{
		public function check_user($employeeId, $employeePass) 
		{
			$query	 		= $this->db->get_where('tb_users', array('employee_id' => $employeeId));;			
			if ($query->num_rows() > 0) 
			{
				foreach ($query->result_array() as $dataRow) {
					$result['employee_id']		= $dataRow['employee_id'];
					$result['employee_name']	= $dataRow['employee_name'];
					$result['employee_password']= $dataRow['employee_password'];
					$result['employee_position']= $dataRow['employee_position'];
				
					if (password_verify($employeePass, $result['employee_password']))
					{
						$result['auth']			= true;		
						return $result;
					}
					else
					{
						$result['auth'] 		= false;
						return $result;
					}
				}
			} 
			else 
			{
				$result['auth']					= 'no_res';
				return $result;
			}			
		}
	}

?>