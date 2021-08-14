<?php 

class cabang_M extends CI_Model
{
	public function tampilp()
	{
		// $this->db->select('*, tb_suplier.nama');
		// $this->db->join('tb_suplier', 'tb_suplier.id_suplier = tb_barang.id_suplier', 'left');
		// return $this->db->get('tb_barang');
		$this->db->select('*');
		$this->db->from('cabang');
		return $this->db->get();
	}
	/*create*/
	public function inputp()
	{
		$data = [
			'kode_cabang'=>$this->input->post('kode_cabang'),
			'nama_cabang'=>$this->input->post('nama_cabang'),
			
		];
		
		$this->db->insert('cabang',$data);
	}
	/*update*/
	public function edit_data_Cabang($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function edit_dataCabang($where,$data,$table)
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