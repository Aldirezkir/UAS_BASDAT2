<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Cabang extends CI_controller

{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('cabang_M');
		
	}
	function index()
	{
		$t['title'] =  ' | Data Cabang ';
		$data['datas'] = $this->cabang_M->tampilp()->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('cabang',$data);
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function tambah_data_Cabang()
	{
		$t['title'] =  ' | Tambah Data Cabang';
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('tambah_cabang');
		$this->load->view('templates/footer_dashboard');
	}
	/*create*/
	public function sv_Cabang()
	{	
		$this->form_validation->set_message('required','Kolom {field} Harus Diisi');

		$this->form_validation->set_rules('kode_cabang', 'cabang', 'trim|required');
		$this->form_validation->set_rules('nama_cabang', 'cabang', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Input Data Cabang..</div>');
			redirect('Cabang/index','refresh');
			
		} 
		else 
		{
			$this->cabang_M->inputp();
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Input Data Cabang..</div>');
			redirect('Cabang/index','refresh');
		}
	}
	/*update*/
	public function edit($kode_cabang)
	{
		$t['title'] =  ' | Edit Data Cabang ';
		$where = array('kode_cabang'=>$kode_cabang);
		$data['datas'] = $this->cabang_M->edit_data_Cabang($where,'cabang')->result();
		$this->load->view('templates/header_dashboard',$t);
		$this->load->view('sidebar');
		$this->load->view('edit_cabang',$data);
		$this->load->view('templates/footer_dashboard');
	}
	public function sav_Cabang($kode_cabang)
	{
		$where =  array('kode_cabang'=>$kode_cabang);
		$data = array(
						'kode_cabang'=>$this->input->post('kode_cabang'),
						'nama_cabang'=>$this->input->post('nama_cabang'),
					);
		$this->cabang_M->edit_dataCabang($where,$data,'cabang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Edit Data Cabang..</div>');
		redirect('Cabang/index','refresh');
	}
	/*delete*/
	public function hapus($kode_cabang)
	{
		$where = array('kode_cabang'=>$kode_cabang);
		$this->cabang_M->hapusp($where,'cabang');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Berhasil Hapus Data Cabang..</div>');
		redirect('Cabang/index','refresh');
	}

	
}


 ?>