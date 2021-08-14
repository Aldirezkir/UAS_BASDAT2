<?php 

class departemen_M extends CI_Model
{
	public function tampilp()
	{
		// $this->db->select('*, tb_suplier.nama');
		// $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_barang.id_suplier', 'left');
		// return $this->db->get('tb_barang');
		$this->db->select('*');
		$this->db->from('departemen');
		return $this->db->get();
	}
	/*create*/
	public function inputp()
	{
		$data = [
			'kode_departemen'=>$this->input->post('kode_departemen'),
			'nama_departemen'=>$this->input->post('nama_departemen'),
			
		];
		
		$this->db->insert('departemen',$data);
	}
	/*update*/
	public function edit_data_Departemen($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function edit_dataDepartemen($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	/*delete*/
	public function hapusp($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}