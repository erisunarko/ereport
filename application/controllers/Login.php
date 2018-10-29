<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if (isset($_SESSION['userData']) || !empty($_SESSION['userData']))
		{
			$this->load->view('employee/dashboard');
		}
		else
		{
			$this->load->view('pages/login');
		}		
	}

	public function auth()
	{
		$this->load->model('authentication_model');
		$employeeId				= $this->input->post('employee_id');
		$employeePass			= $this->input->post('password');
		$data['db']				= $this->authentication_model->check_user($employeeId, $employeePass);
		
		if ($data['db']['auth'] == 'true')
		{
			if ($data['db']['employee_position'] == 'it_manager')
			{
				$userData 	= array(
					'user_id' 		=> $data['db']['employee_id'],
					'user_name' 	=> $data['db']['employee_name'],
					'user_position' => $data['db']['employee_position'],
					'login_state'	=> 'loggedin'
				);
				$_SESSION['userData'] 	= $userData;
				$this->load->model('getticket_model');
				$data['dataTicket'] 	= $this->getticket_model->get_ticket();
				$this->load->view('it_manager/dashboard', $data);	
			}
			elseif ($data['db']['employee_position'] == 'it_admin')
			{
				$userData 	= array(
					'user_id' 		=> $data['db']['employee_id'],
					'user_name' 	=> $data['db']['employee_name'],
					'user_position' => $data['db']['employee_position'],
					'login_state'	=> 'loggedin'
				);
				$_SESSION['userData'] 	= $userData;
				$this->load->model('getticket_model');
				$data['dataTicket'] 	= $this->getticket_model->get_ticket();
				$this->load->view('it_admin/dashboard', $data);	
			}
			elseif ($data['db']['employee_position'] == 'employee')
			{
				$userData 	= array(
					'user_id' 		=> $data['db']['employee_id'],
					'user_name' 	=> $data['db']['employee_name'],
					'user_position' => $data['db']['employee_position'],
					'login_state'	=> 'loggedin'
				);
				$_SESSION['userData'] 	= $userData;
				$this->load->model('getticket_model');
				$data['dataTicket'] 	= $this->getticket_model->get_ticket();
				$this->load->view('employee/dashboard', $data);
			}
		}
		elseif ($data['db']['auth'] == 'false')	
		{			
			$this->load->view('pages/login', $data);
		} 
		elseif ($data['db']['auth'] == 'no_res')	
		{			
			$this->load->view('pages/login', $data);
		} 

	}

	public function logout()
	{
		session_destroy();
		$this->load->view('pages/login');
	}

}
