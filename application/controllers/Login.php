<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pages/login');
	}

	public function auth()
	{
		$this->load->model('Authentication_model');
		$employeeId				= $this->input->post('employee_id');
		$employeePass			= $this->input->post('password');
		$data['db']				= $this->Authentication_model->check_user($employeeId, $employeePass);
		
		if ($data['db']['auth'] == 'true')
		{
			if ($data['db']['employee_position'] == 'it_manager')
			{
				$this->load->view('it_manager/dashboard');
			}
			elseif ($data['db']['employee_position'] == 'it_admin')
			{
				$this->load->view('it_admin/dashboard');	
			}
			elseif ($data['db']['employee_position'] == 'it_support')
			{
				$this->load->view('it_support/dashboard');	
			}
			elseif ($data['db']['employee_position'] == 'employee')
			{
				$this->load->view('employee/dashboard');	
			}
		}
		elseif ($data['db']['auth'] == 'false')	
		{			
			$this->load->view('pages/login');
		} 
		elseif ($data['db']['auth'] == 'no_res')	
		{			
			$this->load->view('pages/login');
		} 

	}
}
