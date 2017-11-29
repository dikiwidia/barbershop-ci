<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jquery_model extends CI_Model {

	public function select_time_read_where_is_not($date)
	{
		$q = $this->db->query('SELECT * FROM tbl_waktu WHERE nama_waktu NOT IN ( SELECT time_register FROM tbl_register WHERE date_register = "'.$date.'" )');
		$r = $q->result_array();
		return $r;
	}
	public function jenis_pangkas($pangkas)
	{
		$q = $this->db->query('SELECT * FROM tbl_pangkas WHERE id_usia = '.$pangkas.' ');
		$r = $q->result_array();
		return $r;
	}
	public function harga($id)
	{
		$q = $this->db->get_where('tbl_pangkas', array('id_pangkas'=>$id));
		$r = $q->row_array();
		return $r;
	}
	public function hapus($id)
	{
		$this->db->where('id_register',$id);
		$this->db->delete('tbl_register');
	}
	public function tampilan_edit($id)
	{
		$q = $this->db->query('SELECT * FROM tbl_register WHERE id_register = '.$id.' ');
		$r = $q->row_array();
		return $r;
	}
}
