<?php 

class pegawai_M extends CI_Model
{
	public function tampilp()
	{
		$this->db->select('*');
		$this->db->from('pegawai');
		return $this->db->get();
	}
	/*create*/
	public function inputp()
	{
		$data = [
			'nomor_induk'=>$this->input->post('nomor_induk'),
			'nama_pegawai'=>$this->input->post('nama_pegawai'),
			'tempat_lahir'=>$this->input->post('tempat_lahir'),
			'tanggal_lahir'=>$this->input->post('tanggal_lahir'),
			'jenis_kelamin'=>$this->input->post('jenis_kelamin'),
			'alamat'=>$this->input->post('alamat'),
			'agama'=>$this->input->post('agama'),
			'nomor_telp'=>$this->input->post('nomor_telp'),
			'kode_jabatan'=>$this->input->post('kode_jabatan'),
			'kode_cabang'=>$this->input->post('kode_cabang'),
			'kode_departemen'=>$this->input->post('kode_departemen'),
			'gaji_pokok'=>$this->input->post('gaji_pokok'),
			'tanggal_diangkat'=>$this->input->post('tanggal_diangkat'),
			'tanggal_keluar'=>$this->input->post('tanggal_keluar'),

		];
		
		$this->db->insert('pegawai',$data);
	}
	/*update*/
	public function edit_data_pegawai($where,$table)
	{
		return $this->db->get_where($table,$where);
	}
	public function edit_dataPegawai($where,$data,$table)
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