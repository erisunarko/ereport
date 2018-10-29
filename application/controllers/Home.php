<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		if (isset($_SESSION['userData']) || !empty($_SESSION['userData']))
		{
			if ($_SESSION['userData']['user_position'] == 'employee')
			{
			$this->load->model('getticket_model');
			$data['dataTicket'] 	= $this->getticket_model->get_ticket();
			$this->load->view('employee/dashboard', $data);
			}
			if ($_SESSION['userData']['user_position'] == 'it_admin')
			{
			$this->load->model('getticket_model');
			$data['dataTicket'] 	= $this->getticket_model->get_ticket();
			$this->load->view('it_admin/dashboard', $data);
			}
			if ($_SESSION['userData']['user_position'] == 'it_manager')
			{
			$this->load->model('getticket_model');
			$data['dataTicket'] 	= $this->getticket_model->get_ticket();
			$this->load->view('it_manager/dashboard', $data);
			}
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
		if ($_SESSION['userData']['user_position'] == 'employee')
		{
			$this->load->model('getuser_model');
			$data['dataUser'] 	= $this->getuser_model->get_user_data();
			$this->load->view('employee/user_profile', $data);
		}	
		if ($_SESSION['userData']['user_position'] == 'it_admin')
		{
			$this->load->model('getuser_model');
			$data['dataUser'] 	= $this->getuser_model->get_user_data();
			$this->load->view('it_admin/user_profile', $data);
		}	
		if ($_SESSION['userData']['user_position'] == 'it_manager')
		{
			$this->load->model('getuser_model');
			$data['dataUser'] 	= $this->getuser_model->get_user_data();
			$this->load->view('it_manager/user_profile', $data);
		}	
	}

	public function setting()
	{	
		if ($_SESSION['userData']['user_position'] == 'employee')
		{
			$this->load->view('employee/user_setting');
		}	
		if ($_SESSION['userData']['user_position'] == 'it_admin')
		{
			$this->load->view('it_admin/user_setting');
		}			
		if ($_SESSION['userData']['user_position'] == 'it_manager')
		{
			$this->load->view('it_manager/user_setting');
		}	
	}

	public function chnge_pass()
	{	
		
		$this->load->view('employee/user_setting');
	}
	
	public function take_action($id)
	{	
		$this->load->model('getticket_model');
		$data['dataTicket'] 	= $this->getticket_model->get_ticket_detail($id);
		$this->load->view('it_admin/ticket_detail', $data);
	}
	
	public function upd_ticket($id)
	{	
		$this->load->model('updateticket_model');
		$data['updateRes'] 	= $this->updateticket_model->update_ticket($id);
		$this->load->view('it_admin/update_res', $data);
	}

	public function filter()
	{	
		if ($_SESSION['userData']['user_position'] == 'it_admin')
		{
			$this->load->model('updateticket_model');
			$data['filterRes'] 	= $this->updateticket_model->filter_ticket();
			$this->load->view('it_admin/dashboard', $data);
		}
		if ($_SESSION['userData']['user_position'] == 'it_manager')
		{
			$this->load->model('updateticket_model');
			$data['filterRes'] 	= $this->updateticket_model->filter_ticket();
			$this->load->view('it_manager/dashboard', $data);
		}
	}

	public function server_status()
	{	
		$this->load->view('it_admin/serverstts');
	}
}
