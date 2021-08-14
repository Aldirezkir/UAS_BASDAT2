<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Jabatan extends CI_controller

{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('jabatan_M');
		
	}
	function index()
	{
		$t['title'] =  ' | Data Jabatan ';
		$data['datas'] = $this->jabatan_M->tampilp()->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('jabatan',$data);
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function tambah_data_Jabatan()
	{
		$t['title'] =  ' | Tambah Data Jabatan';
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('tambah_jabatan');
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function sv_Jabatan()
	{	
		$this->form_validation->set_message('required','Kolom {field} Harus Diisi');

		$this->form_validation->set_rules('kode_jabatan', 'cabang', 'trim|required');
		$this->form_validation->set_rules('nama_jabatan', 'cabang', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Input Data Jabatan..</div>');
			redirect('Jabatan/index','refresh');
			
		} 
		else 
		{
			$this->jabatan_M->inputp();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Input Data Jabatan..</div>');
			redirect('Jabatan/index','refresh');
		}
	}
	/*update*/
	public function edit($kode_jabatan)
	{
		$t['title'] =  ' | Edit Data Jabatan ';
		$where = array('kode_jabatan'=>$kode_jabatan);
		$data['datas'] = $this->jabatan_M->edit_data_Jabatan($where,'jabatan')->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('edit_jabatan',$data);
		$this->load->view('templates/footer_dashboard');
	}
	public function sav_Jabatan($kode_jabatan)
	{
		$where =  array('kode_jabatan'=>$kode_jabatan);
		$data = array(
						'kode_jabatan'=>$this->input->post('kode_jabatan'),
						'nama_jabatan'=>$this->input->post('nama_jabatan'),
					);
		$this->jabatan_M->edit_dataJabatan($where,$data,'jabatan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Edit Data Jabatan..</div>');
		redirect('Jabatan/index','refresh');
	}
	/*delete*/
	public function hapus($kode_jabatan)
	{
		$where = array('kode_jabatan'=>$kode_jabatan);
		$this->jabatan_M->hapusp($where,'Jabatan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Berhasil Hapus Data Jabatan..</div>');
		redirect('Jabatan/index','refresh');
	}

	
}


 ?>