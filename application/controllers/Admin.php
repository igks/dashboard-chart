<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		// cek login
		// if($this->session->userdata('status') != "login"){
		// 	redirect(base_url().'welcome?pesan=belumlogin');
		// }
		 $this->load->library('form_validation');
	} 
	function index()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/dashboard');
		$this->load->view('templates/footer');
	}
	function data(){
		$data['data'] = $this->m_pjsb->get_data('data')->result();
		$this->load->view('templates/header');
		$this->load->view('admin/data',$data);
		$this->load->view('templates/footer');
	}
	function data_add(){
		$this->load->view('templates/header');
		$this->load->view('admin/data_add');
		$this->load->view('templates/footer');
	}
	function upload_photo(){
		$namaFile = $_FILES['photo']['name'];
		$ukuranFile = $_FILES['photo']['size'];
		$error = $_FILES['photo']['error'];
		$tmpName = $_FILES['photo']['tmp_name'];

		if ($error === 0) {
			// cek file
			$eksfilevalid = ['jpg','jpeg','png'];
			$eksphoto = explode('.', $namaFile);
			$eksphoto = strtolower(end($eksphoto));
			if (!in_array($eksphoto, $eksfilevalid)) {
				echo "<script>
					  alert('File anda bukan gambar!');
					  </script>";
					return false;
			}
			// cek ukuran file
			if ($ukuranFile > 100000) {
				echo "<script>
					  alert('Ukuran file anda terlalu besar!');
					  </script>";
					return false;
			}
			$namafilebaru = uniqid();
			$namafilebaru .= '.';
			$namafilebaru .= $eksphoto;
			move_uploaded_file($tmpName,'img_upload/'.$namafilebaru);
			return $namafilebaru;
		}
		elseif ($error === 4) {
			$namaFile = "nophoto.png";
			return $namaFile;
		}
	}
	function do_data_add(){
		// xss clean => $this->input->post('some_data', TRUE);
		// no xss clean => $this->input->post('some_data',);
		// Form validation
		$this->form_validation->set_rules('nama_data', 'nama data', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'alamat', 'required');
		$this->form_validation->set_rules('nama_sekolah', 'nama sekolah', 'required');
		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('alamat_sekolah', 'alamat sekolah', 'required');
		$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'required');
		$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'required');
		if ($this->form_validation->run() !== false) {
			// ambil data form
			$nama           = $this->input->post('nama_data',true);
			$kelamin        = $this->input->post('kelamin',true);
			$tempat_lahir   = $this->input->post('tempat_lahir',true);
			$tanggal_lahir  = $this->input->post('tanggal_lahir');
			$nomor_hp       = $this->input->post('no_hp',true);
			$alamat_rumah   = $this->input->post('alamat_rumah',true);
			$nin            = $this->input->post('nin',true);
			$nama_sekolah   = $this->input->post('nama_sekolah',true);
			$kelas          = $this->input->post('kelas',true);
			$nomor_induk    = $this->input->post('nomor_induk',true);
			$telp_sekolah   = $this->input->post('no_telp_sekolah',true);
			$fax_sekolah    = $this->input->post('no_fax_sekolah',true);
			$kepala_sekolah = $this->input->post('nama_kepala_sekolah',true);
			$alamat_sekolah = $this->input->post('alamat_sekolah',true);
			$ayah_wali      = $this->input->post('nama_ayah',true);
			$pekerjaan_ayah = $this->input->post('pekerjaan_ayah',true);
			$nomor_hp_ayah  = $this->input->post('no_hp_ayah',true);
			$alamat_ayah    = $this->input->post('alamat_ayah',true);
			$ibu_wali       = $this->input->post('nama_ibu',true);
			$pekerjaan_ibu  = $this->input->post('pekerjaan_ibu',true);
			$nomor_hp_ibu   = $this->input->post('no_hp_ibu',true);
			$alamat_ibu     = $this->input->post('alamat_ibu',true);
			$anak_i         = $this->input->post('anak_i',true);
			$anak_ii        = $this->input->post('anak_ii',true);
			$anak_iii       = $this->input->post('anak_iii',true);
			$anak_iv        = $this->input->post('anak_iv',true);
			$photo          = $this->upload_photo();
			if (!$photo) {
				$this->data_add();
				return false;
			}
			// masukkan ke database
			$data = [
				'id'             => '',
				'nama'           => $nama,
				'kelamin'        => $kelamin,
				'tempat_lahir'   => $tempat_lahir,
				'tanggal_lahir'  => $tanggal_lahir,
				'nomor_hp'       => $nomor_hp,
				'alamat_rumah'   => $alamat_rumah,
				'nin'            => $nin,
				'nama_sekolah'   => $nama_sekolah,
				'kelas'          => $kelas,
				'nomor_induk'    => $nomor_induk,
				'telp_sekolah'   => $telp_sekolah,
				'fax_sekolah'    => $fax_sekolah,
				'kepala_sekolah' => $kepala_sekolah,
				'alamat_sekolah' => $alamat_sekolah,
				'ayah_wali'      => $ayah_wali,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'nomor_hp_ayah'  => $nomor_hp_ayah,
				'alamat_ayah'    => $alamat_ayah,
				'ibu_wali'       => $ibu_wali,
				'pekerjaan_ibu'  => $pekerjaan_ibu,
				'nomor_hp_ibu'   => $nomor_hp_ibu,
				'alamat_ibu'     => $alamat_ibu,
				'anak_i'         => $anak_i,
				'anak_ii'        => $anak_ii,
				'anak_iii'       => $anak_iii,
				'anak_iv'        => $anak_iv,
				'photo'          => $photo
			];
			$safe_data = $this->db->escape_str($data);
			$this->db->trans_start();
			$this->m_pjsb->insert_data($safe_data,'data');
			$this->db->trans_complete();
			$this->session->set_flashdata('pesan','Ditambahkan');
			$this->data();
		} else {
			$this->data_add();
		}
	}
	function data_edit($id){
		$where = array(
			'id' => $id
		);
		$data['data'] = $this->m_pjsb->edit_data($where,'data')->row();
		$this->load->view('templates/header');
		$this->load->view('admin/data_edit',$data);
		$this->load->view('templates/footer'); 
	}
	function do_data_edit(){
		// xss clean => $this->input->post('some_data', TRUE);
		// no xss clean => $this->input->post('some_data',);
		// Form validation
		$this->form_validation->set_rules('nama_data', 'nama data', 'required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat lahir', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal lahir', 'required');
		$this->form_validation->set_rules('alamat_rumah', 'alamat', 'required');
		$this->form_validation->set_rules('nama_sekolah', 'nama sekolah', 'required');
		$this->form_validation->set_rules('kelas', 'kelas', 'required');
		$this->form_validation->set_rules('alamat_sekolah', 'alamat sekolah', 'required');
		$this->form_validation->set_rules('nama_ayah', 'nama ayah', 'required');
		$this->form_validation->set_rules('nama_ibu', 'nama ibu', 'required');
		if ($this->form_validation->run() !== false) {
			// ambil data form
			$nama           = $this->input->post('nama_data',true);
			$kelamin        = $this->input->post('kelamin',true);
			$tempat_lahir   = $this->input->post('tempat_lahir',true);
			$tanggal_lahir  = $this->input->post('tanggal_lahir');
			$nomor_hp       = $this->input->post('no_hp',true);
			$alamat_rumah   = $this->input->post('alamat_rumah',true);
			$nin            = $this->input->post('nin',true);
			$nama_sekolah   = $this->input->post('nama_sekolah',true);
			$kelas          = $this->input->post('kelas',true);
			$nomor_induk    = $this->input->post('nomor_induk',true);
			$telp_sekolah   = $this->input->post('no_telp_sekolah',true);
			$fax_sekolah    = $this->input->post('no_fax_sekolah',true);
			$kepala_sekolah = $this->input->post('nama_kepala_sekolah',true);
			$alamat_sekolah = $this->input->post('alamat_sekolah',true);
			$ayah_wali      = $this->input->post('nama_ayah',true);
			$pekerjaan_ayah = $this->input->post('pekerjaan_ayah',true);
			$nomor_hp_ayah  = $this->input->post('no_hp_ayah',true);
			$alamat_ayah    = $this->input->post('alamat_ayah',true);
			$ibu_wali       = $this->input->post('nama_ibu',true);
			$pekerjaan_ibu  = $this->input->post('pekerjaan_ibu',true);
			$nomor_hp_ibu   = $this->input->post('no_hp_ibu',true);
			$alamat_ibu     = $this->input->post('alamat_ibu',true);
			$anak_i         = $this->input->post('anak_i',true);
			$anak_ii        = $this->input->post('anak_ii',true);
			$anak_iii       = $this->input->post('anak_iii',true);
			$anak_iv        = $this->input->post('anak_iv',true);
			$error 					= $_FILES['photo']['error'];

			if ($error === 4) {
				$photo 		= $this->input->post('photo-org',true);
			} elseif ($error === 0){
				$oldPhoto = $this->input->post('photo-org',true);
				$file  		= "img_upload/".$oldPhoto;
				if ($oldPhoto != "nophoto.png") {	unlink($file); }
				$photo    = $this->upload_photo();
			}
			
			// masukkan ke database
			$data = [
				'nama'           => $nama,
				'kelamin'        => $kelamin,
				'tempat_lahir'   => $tempat_lahir,
				'tanggal_lahir'  => $tanggal_lahir,
				'nomor_hp'       => $nomor_hp,
				'alamat_rumah'   => $alamat_rumah,
				'nin'            => $nin,
				'nama_sekolah'   => $nama_sekolah,
				'kelas'          => $kelas,
				'nomor_induk'    => $nomor_induk,
				'telp_sekolah'   => $telp_sekolah,
				'fax_sekolah'    => $fax_sekolah,
				'kepala_sekolah' => $kepala_sekolah,
				'alamat_sekolah' => $alamat_sekolah,
				'ayah_wali'      => $ayah_wali,
				'pekerjaan_ayah' => $pekerjaan_ayah,
				'nomor_hp_ayah'  => $nomor_hp_ayah,
				'alamat_ayah'    => $alamat_ayah,
				'ibu_wali'       => $ibu_wali,
				'pekerjaan_ibu'  => $pekerjaan_ibu,
				'nomor_hp_ibu'   => $nomor_hp_ibu,
				'alamat_ibu'     => $alamat_ibu,
				'anak_i'         => $anak_i,
				'anak_ii'        => $anak_ii,
				'anak_iii'       => $anak_iii,
				'anak_iv'        => $anak_iv,
				'photo'          => $photo
			];
			$safe_data = $this->db->escape_str($data);
			$id =$this->input->post('id');
			$where = array(
			'id' => $id
			);
			$this->db->trans_start();
			$this->m_pjsb->update_data($where, $safe_data,'data');
			$this->db->trans_complete();
			$this->session->set_flashdata('pesanubah','Diubah');
			$this->data_detail($id);
		} else {
			$this->data_edit($this->input->post('id',true));
		}
	}
	function do_data_delete($id){
		$where = array(
			'id' => $id
		);
		$data = $this->m_pjsb->edit_data($where,'data')->row()->photo;
		$file = "img_upload/".$data;
		$this->m_pjsb->delete_data($where,'data');
		if ($data != "nophoto.png") {	unlink($file); }
		$this->session->set_flashdata('pesan','Dihapus');
		$this->data();
	}
	function data_detail($id){
		$where = array(
			'id' => $id
		);
		$data['data'] = $this->m_pjsb->edit_data($where,'data')->row();
		$this->load->view('templates/header');
		$this->load->view('admin/data_detail',$data);
		$this->load->view('templates/footer'); 
	}
}
