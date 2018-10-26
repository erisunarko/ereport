<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if (isset($_SESSION['userData']) || !empty($_SESSION['userData']))
		{
			$this->load->model('getticket_model');
			$data['dataTicket'] 	= $this->getticket_model->get_ticket();
			$this->load->view('employee/dashboard', $data);
		}
		else
		{
			$this->load->view('pages/login');
		}
	}

	public function crticket()
	{
		if (isset($_SESSION['userData']) || !empty($_SESSION['userData']))
		{
			$this->load->view('employee/create_ticket');
		}
		else
		{
			$this->load->view('pages/login');
		}
	}	

	public function svticket()
	{		
		$this->load->model('saveticket_model');

		$res = $this->saveticket_model->save_ticket();

		if ($res == 'success')
		{
			$data['mssg'] = 'ok';
			$this->load->view('employee/saved_ticket', $data);
		}
		else
		{
			$data['mssg'] = 'nok';
			$this->load->view('employee/failed_ticket', $data);
		}		
	}

	public function profile()
	{	
		$this->load->model('getuser_model');
		$data['dataUser'] 	= $this->getuser_model->get_user_data();
		$this->load->view('employee/user_profile', $data);
	}

	public function setting()
	{	
		$this->load->view('employee/user_setting');
	}

	public function chnge_pass()
	{	
		
		$this->load->view('employee/user_setting');
	}	

}
