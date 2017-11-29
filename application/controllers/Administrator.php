<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct() {
	parent::__construct();
	
	$this->load->helper('form','url');
	$this->load->library('form_validation');
	
	// Load Model
	$this->load->model('administrator_model');
	
	// Load Template
	$this->load->library('template');
	
	}
	public function index()
	{
		if(isset($this->session->userdata['logged_in'])){
			$data['register'] = $this->administrator_model->baca_register();
			$this->template->display('dashboard',$data);
		} else {
			redirect('/administrator/login');
		}
	}
	public function login()
	{
		if(isset($this->session->userdata['logged_in'])){
			redirect('/administrator');
		} else {
			$this->load->view('login');
		}
	}
	public function otentikasi()
	{
		$pass 	 	= $this->input->post('password');
		$md5pass 	= md5($pass); // MD4
		$username 	= $this->input->post('username');
		$data = array(
		'username' => $username,
		'password' => $md5pass
		);
		$result = $this->administrator_model->proses($data);
		if ($result == TRUE) {
			$duser		 = $this->administrator_model->baca($username);
			$session_data = array(
				'username' 	=> $duser[0]->nama_pengguna,
				'password' 	=> $duser[0]->katasandi,
			);
			// Add user data in session
			$this->session->set_userdata('logged_in', $session_data);
			redirect('/administrator');
		} else {
			redirect('/administrator/login');
		}
	}
	public function edited()
	{
		$id = $this->input->post('id');
		if(!isset($id)){
			redirect('administrator');
		} else {
			$a = $this->input->post('n');
			$data = array (
				'nama_register' => $a,
			);
			$this->administrator_model->edited($id,$data);
			redirect('administrator');
		}
	}
	public function payment()
	{
		$get_id = $this->uri->segment(3);
		if($get_id == null){
			redirect('administrator');
		} else {
			$data = array (
				'status' => 'Y',
			);
			$this->administrator_model->payment($get_id,$data);
			redirect('administrator');
		}
	}
	public function cancel()
	{
		$get_id = $this->uri->segment(3);
		if($get_id == null){
			redirect('administrator');
		} else {
			$data = array (
				'status' => 'N',
			);
			$this->administrator_model->cancel($get_id,$data);
			redirect('administrator');
		}
	}
	public function logout()
	{
		$session_data = array(
			'username' 	=> '',
			'password' 	=> '',
		);
		$this->session->unset_userdata('logged_in',$session_data);
		redirect ('/');
	}
}
