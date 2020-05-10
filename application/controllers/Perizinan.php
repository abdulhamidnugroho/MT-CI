<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perizinan extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Perizinan_model');

		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login', 'refresh');
		}
	}

	public function index()
	{
		$this->data['title']		= 'Data Perizinan';
		$this->data['perizinan']	= $this->Perizinan_model->get_all();

		$this->load->view('perizinan/data_perizinan', $this->data);
		
	}

	public function add_izin()
	{
		$this->load->view('perizinan/add_perizinan');
	}

}
