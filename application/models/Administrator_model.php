<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends CI_Model {

	public function proses($data) {
		//$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
		$query = $this->db->get_where('tbl_pengguna', array('nama_pengguna' => $data['username'], 'katasandi' => $data['password']), 1);
		if ($query->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}
	public function baca($username) {
		$query = $this->db->get_where('tbl_pengguna', array('nama_pengguna' => $username), 1);
		if ($query->num_rows() == 1) {
				return $query->result();
		} else {
			return FALSE;
		}
	}
	public function baca_register() {
		$q = $this->db->query('SELECT * FROM tbl_register ORDER BY id_register DESC');
		$r = $q->result_array();
		return $r;
	}
	public function edited($id,$data) {
		$this->db->where('id_register', $id);
		$this->db->update('tbl_register', $data);
	}
	public function payment($get_id,$data) {
		$this->db->where('id_register', $get_id);
		$this->db->update('tbl_register', $data);
	}
	public function cancel($get_id,$data) {
		$this->db->where('id_register', $get_id);
		$this->db->update('tbl_register', $data);
	}
}