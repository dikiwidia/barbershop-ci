<?php
class Template {
	protected $_ci;
	function __construct()
	{
		$this->_ci =& get_instance();
	}
	function display($template,$data=null)
	{
		//Konten Kanan
		$data['_content']=$this->_ci->load->view($template,$data,true);
		//Sidebar
		$data['_sidebar']=$this->_ci->load->view('template/sidebar',$data,true);
		//Header
		$data['_header']=$this->_ci->load->view('template/header',$data,true);
		//Footer
		$data['_footer']=$this->_ci->load->view('template/footer',$data,true);
		
		$this->_ci->load->view('/template.php',$data);
	}
}