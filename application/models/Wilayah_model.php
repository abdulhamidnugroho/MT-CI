<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wilayah_model extends CI_Model
{
	function get_provinsi()
	{
		$this->db->order_by('nama_provinsi', 'ASC');
		$prov = $this->db->get('provinsi');
		if ($prov->num_rows() > 0)
		{
			foreach ($prov->result_array() as $row)
			{
				$result['']					= '- Pilih Provinsi -';
				$result[$row['id_provinsi']]= ucwords($row['nama_provinsi']);
			}
			return $result;
		}
	}

	function get_kota($id)
	{
		$this->db->where('provinsi_id', $id);
		$this->db->order_by('nama_kota', 'ASC');
		$kota = $this->db->get('kota');
		if ($kota->num_rows()>0)
		{
			foreach ($kota->result_array() as $row)
			{
				$result[$row['id_kota']]= ucwords($row['nama_kota']);
			}
			return $result;
		}
	}

	function get_kecamatan($id)
	{
		$this->db->where('kota_id', $id);
		$this->db->order_by('nama_kecamatan', 'ASC');
		$kec = $this->db->get('kecamatan');
		if ($kec->num_rows()>0)
		{
			foreach ($kec->result_array() as $row)
			{
				$result[$row['id_kecamatan']]= ucwords($row['nama_kecamatan']);
			}
			return $result;
		}
	}
}
