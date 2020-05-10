<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
	function get_kelas()
	{
		$this->db->order_by('id_kelas', 'ASC');
		$kelas = $this->db->get('kelas');
		if ($kelas->num_rows() > 0)
		{
			foreach ($kelas->result_array() as $row)
			{
				$result['']					= '- Pilih Kelas Madin -';
				$result[$row['id_kelas']]= ucwords($row['nama_kelas']);
			}
			return $result;
		}
	}

	function get_g_santri()
	{
		$this->db->order_by('id_kelas', 'ASC');
		$kelas = $this->db->get('kelas');
		if ($kelas->num_rows() > 0)
		{
			foreach ($kelas->result_array() as $row)
			{
				$result['']					= '- Pilih Kelas Madin -';
				$result[$row['id_kelas']]= ucwords($row['nama_kelas']);
			}
			return $result;
		}
	}

}
