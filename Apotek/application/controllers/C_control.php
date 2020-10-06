<?php
defined('BASEPATH')or exit ("NO direct access script allowed");

class C_control extends CI_Controller {
	public function index(){
		$data['data'] = $this->M_model->tampil_data('obat');
		$this->load->view('V_view',$data);
	}
	public function Edit_data($id){
		$data['data'] = $this->M_model->Tampil_dataEdit($id);
		$this->load->view('V_edit',$data);
	}

	public function proses_Edit($id){
		$nama_obat = $_POST['nama_obat'];
		$jenis_obat = $_POST['jenis_obat'];
		$tanggal_kedaluarsa = $_POST['tanggal_kedaluarsa'];

		if ($jenis_obat == ('kapsul')) {

			$jenis_obat = 'kapsul';

		}else{
			$jenis_obat = 'sirup';
		}

		$data = array('nama_obat' => $nama_obat, 'jenis_obat' => $jenis_obat, 'tanggal_kedaluarsa' => $tanggal_kedaluarsa);

		$edit = $this->M_model->Update_data($data,$id);

		if ($edit > 0){
			redirect('C_control/index');
		}
	}

	public function hapus_data($id){

		$hapus = $this->M_model->Hapus_data($id);

			if ($hapus > 0) {
				redirect('C_control/index');
			}else {
				echo "Gagal Dihapus!";
			}
	}

	public function Tambah_data()
	{
		$this->load->view('V_tambah');
	}

	public function proses_Tambah(){
		$nama_obat = $_POST['nama_obat'];
		$jenis_obat = $_POST['jenis_obat'];
		$tanggal_kedaluarsa = $_POST['tanggal_kedaluarsa'];

		if ($jenis_obat == ('kapsul')){
			$jenis_obat = 'kapsul';
		}else {
			$jenis_obat = 'sirup';
		}
		$data = array('nama_obat' => $nama_obat,'jenis_obat' => $jenis_obat,'tanggal_kedaluarsa' => $tanggal_kedaluarsa);

		$this->M_model->M_Tambah('obat',$data);

		redirect('C_control/index','refresh');
	}
}
?>