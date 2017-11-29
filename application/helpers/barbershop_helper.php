<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
if( ! function_exists('opt_pangkas')){
	function buatrp($price){
		$jadi = "Rp " . number_format($price,2,',','.');
		return $jadi;
	}
}

//Ambil pangkas dari ID
if(!function_exists('get_pangkas')){
	function get_pangkas($id=0){
		//get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
	   if($id == 0){
		   $r = "Tidak ada";
	   } else {			
		   //get data from database
		   $query = $ci->db->get_where('tbl_pangkas',array('id_pangkas'=>$id));
		   
		   if($query->num_rows() > 0){
			   $q  	= $query->row_array();
			   $r 	= $q['nama_pangkas'];
		   } else {
			   $r 	= "Terjadi Kesalahan";
		   }
	   }
	   return $r;
	}
}

//Ambil harga dari ID
if(!function_exists('get_harga')){
	function get_harga($id=0){
		//get main CodeIgniter object
       $ci =& get_instance();
       
       //load databse library
       $ci->load->database();
       
	   if($id == 0){
		   $r = "Tidak ada";
	   } else {			
		   //get data from database
		   $query = $ci->db->get_where('tbl_pangkas',array('id_pangkas'=>$id));
		   
		   if($query->num_rows() > 0){
			   $q  	= $query->row_array();
			   $r 	= $q['harga'];
		   } else {
			   $r 	= "Terjadi Kesalahan";
		   }
	   }
	   return $r;
	}
}

//Ambil Status dari Keterangan
if(!function_exists('get_status')){
	function get_status($status){
	   if($status == "N"){
		   $r = "Belum dibayar";
	   } else {			
		   $r = "Sudah dibayar";
	   }
	   return $r;
	}
}

//SWITCH BULAN
if ( ! function_exists('bulan'))
{
    function bulan($bln)
    {
        switch ($bln)
        {
            case 1:
                return "Januari";
                break;
            case 2:
                return "Februari";
                break;
            case 3:
                return "Maret";
                break;
            case 4:
                return "April";
                break;
            case 5:
                return "Mei";
                break;
            case 6:
                return "Juni";
                break;
            case 7:
                return "Juli";
                break;
            case 8:
                return "Agustus";
                break;
            case 9:
                return "September";
                break;
            case 10:
                return "Oktober";
                break;
            case 11:
                return "November";
                break;
            case 12:
                return "Desember";
                break;
        }
    }
}
//format tanggal FULL
if( ! function_exists('func_tanggal')){
	function func_tanggal($tgl)
	{
		if($tgl == '0000-00-00'){
			$ubahTanggal = '-';
		} else {
		$tglBaru=explode("-",$tgl); //memecah berdasarkan strip
		 
		$tahun 	=$tglBaru[0]; //tahun
		$bln	=$tglBaru[1]; //bulan
		$tgl	=$tglBaru[2]; //tanggal
		$bln	=bulan($bln); //mengganti bulan angka menjadi text dari fungsi bulan
		$ubahTanggal="$tgl $bln $tahun"; //hasil akhir tanggal
		}
		return $ubahTanggal;
	}
}