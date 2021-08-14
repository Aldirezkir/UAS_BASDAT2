<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Pegawai extends CI_controller

{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('pegawai_M');
		
	}
	function index()
	{
		$t['title'] =  ' | Data Pegawai ';
		$data['datas'] = $this->pegawai_M->tampilp()->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('pegawai',$data);
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function tambah_data_Pegawai()
	{
		$t['title'] =  ' | Tambah Data Pegawai';
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('tambah');
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function sv_Pegawai()
	{	
		$this->form_validation->set_message('required','Kolom {field} Harus Diisi');

		$this->form_validation->set_rules('nomor_induk', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('nama_pegawai', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('tanggal_lahir', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('jenis_kelamin', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('alamat', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('agama', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('nomor_telp', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('kode_jabatan', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('kode_cabang', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('kode_departemen', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('gaji_pokok', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('tanggal_diangkat', 'Pegawai', 'trim|required');
		$this->form_validation->set_rules('tanggal_keluar', 'Pegawai', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			echo "gagal Input Data";
		} 
		else 
		{
			$this->pegawai_M->inputp();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Input Data Pegawai..</div>');
			redirect('Pegawai/index','refresh');
		}
	}
	/*update*/
	public function edit($nomor_induk)
	{
		$t['title'] =  ' | Edit Data Pegawai ';
		$where = array('nomor_induk'=>$nomor_induk);
		$data['datas'] = $this->pegawai_M->edit_data_Pegawai($where,'pegawai')->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('edit',$data);
		$this->load->view('templates/footer_dashboard');
	}
	public function sav_Pegawai($nomor_induk)
	{
		$where =  array('nomor_induk'=>$nomor_induk);
		$data = array(
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
						
					);
		$this->pegawai_M->edit_dataPegawai($where,$data,'pegawai');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Edit Data Pegawai..</div>');
		redirect('Pegawai/index','refresh');
	}
	/*delete*/
	public function hapus($nomor_induk)
	{
		$where = array('nomor_induk'=>$nomor_induk);
		$this->pegawai_M->hapusp($where,'pegawai');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Berhasil Hapus Data Pegawai..</div>');
		redirect('Pegawai/index','refresh');
	}

	
}


 ?>