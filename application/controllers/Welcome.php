<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
	parent::__construct();
	
	$this->load->helper('form','url');
	$this->load->library('form_validation');
	
	// Load Model
	$this->load->model('welcome_model');
	
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function saved()
	{
		$e = $this->input->post('form-verify');
		if(isset($e)){
			$a = $this->input->post('form-name');
			$b = $this->input->post('form-date');
			$c = $this->input->post('form-time');
			$d = $this->input->post('form-type');
			$data = array(
				'nama_register' => $a,
				'date_register' => $b,
				'time_register' => $c,
				'id_pangkas' => $d,
				'status' => 'N',
			);
			$this->welcome_model->saved($data);
			$this->load->view('congrats',$data);
		} else {
			redirect('/');
		}
		
	}
}
