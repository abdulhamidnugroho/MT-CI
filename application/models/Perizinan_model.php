<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perizinan_model extends CI_Model
{
	function get_all()
	{
		$this->db->join('users', 'perizinan.santri_id = users.username');
		$this->db->order_by('id_izin', 'ASC');
		return $this->db->get('perizinan')->result();
	}

}
