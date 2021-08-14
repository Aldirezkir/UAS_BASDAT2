<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Departemen extends CI_controller

{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('departemen_M');
		
	}
	function index()
	{
		$t['title'] =  ' | Data Departemen ';
		$data['datas'] = $this->departemen_M->tampilp()->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('departemen',$data);
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function tambah_data_Departemen()
	{
		$t['title'] =  ' | Tambah Data Departemen';
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('tambah_departemen');
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function sv_Departemen()
	{	
		$this->form_validation->set_message('required','Kolom {field} Harus Diisi');

		$this->form_validation->set_rules('kode_departemen', 'departemen', 'trim|required');
		$this->form_validation->set_rules('nama_departemen', 'departemen', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Input Data Departemen..</div>');
			redirect('Departemen/index','refresh');
			
		} 
		else 
		{
			$this->departemen_M->inputp();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Input Data Departemen..</div>');
			redirect('Departemen/index','refresh');
		}
	}
	/*update*/
	public function edit($kode_departemen)
	{
		$t['title'] =  ' | Edit Data Departemen ';
		$where = array('kode_departemen'=>$kode_departemen);
		$data['datas'] = $this->departemen_M->edit_data_Departemen($where,'departemen')->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('edit_departemen',$data);
		$this->load->view('templates/footer_dashboard');
	}
	public function sav_Departemen($kode_departemen)
	{
		$where =  array('kode_departemen'=>$kode_departemen);
		$data = array(
						'kode_departemen'=>$this->input->post('kode_departemen'),
						'nama_departemen'=>$this->input->post('nama_departemen'),
					);
		$this->departemen_M->edit_dataDepartemen($where,$data,'departemen');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Edit Data Departemen..</div>');
		redirect('Departemen/index','refresh');
	}
	/*delete*/
	public function hapus($kode_departemen)
	{
		$where = array('kode_departemen'=>$kode_departemen);
		$this->departemen_M->hapusp($where,'departemen');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Berhasil Hapus Data Departemen..</div>');
		redirect('Departemen/index','refresh');
	}

	
}


 ?>