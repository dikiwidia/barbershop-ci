<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_model extends CI_Model {

	public function saved($data)
	{
		$q = $this->db->insert('tbl_register',$data);
	}
}
