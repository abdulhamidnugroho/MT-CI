<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->model('Ion_auth_model');
		
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
		else
		{
			$this->data = array(
				'title'		=> 'Dashboard'
			);
			$this->load->view('dashboard',$this->data);
		}
		
	}

}
