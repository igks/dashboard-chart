<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sqlinject extends CI_Controller {

	public function index()
	{
		
	}

	function injectdata(){
			
			$nama           = "Nama";
			$kelamin				= "Jenis kelamin";
			$tempat_lahir   = "Tempat lahir";
			$tanggal_lahir  = date("Y-m-d");
			$nomor_hp       = "081802433776";
			$alamat_rumah   = "batu aji, kota batam";
			$nin            = "induk nasional";
			$nama_sekolah   ="sekolah asal";
			$kelas          ="kelas 1";
			$nomor_induk    ="nomor induk";
			$telp_sekolah   ="telp sekolah";
			$fax_sekolah    ="fax sekolah";
			$kepala_sekolah ="kepala sekolah";
			$alamat_sekolah ="alamat sekolah";
			$ayah_wali      ="Ayah/wali";
			$pekerjaan_ayah ="pekerjaan ayah";
			$nomor_hp_ayah  ="no hp ayah";
			$alamat_ayah    ="alamat ayah";
			$ibu_wali       ="ibu/wali";
			$pekerjaan_ibu  ="pekerjaan ibu";
			$nomor_hp_ibu   ="no hp ibu";
			$alamat_ibu     ="alamat ibu";
			$anak_i         ="anak 1";
			$anak_ii        ="anak 2";
			$anak_iii       ="anak 3";
			$anak_iv        ="anak 4";
			$photo          ="nophoto.png";
			
			for ($i=0; $i < 10 ; $i++) { 

			$data = array(
				'id' => "",
				'nama' => $nama . $i,
				'kelamin' => $kelamin . $i,
				'tempat_lahir' => $tempat_lahir . $i,
				'tanggal_lahir' => $tanggal_lahir,
				'nomor_hp' => $nomor_hp . $i,
				'alamat_rumah' => $alamat_rumah . $i,
				'nin' => $nin . $i,
				'nama_sekolah' => $nama_sekolah . $i,
				'kelas' => $kelas . $i,
				'nomor_induk' => $nomor_induk . $i,
				'telp_sekolah' => $telp_sekolah . $i,
				'fax_sekolah' => $fax_sekolah . $i,
				'kepala_sekolah' => $kepala_sekolah. $i,
				'alamat_sekolah' => $alamat_sekolah. $i,
				'ayah_wali' => $ayah_wali . $i,
				'pekerjaan_ayah' => $pekerjaan_ayah . $i,
				'nomor_hp_ayah' => $nomor_hp_ayah . $i,
				'alamat_ayah' => $alamat_ayah . $i,
				'ibu_wali' => $ibu_wali . $i,
				'pekerjaan_ibu' => $pekerjaan_ibu . $i,
				'nomor_hp_ibu' => $nomor_hp_ibu . $i,
				'alamat_ibu' => $alamat_ibu . $i,
				'anak_i' => $anak_i . $i,
				'anak_ii' => $anak_ii . $i,
				'anak_iii' => $anak_iii . $i,
				'anak_iv' => $anak_iv . $i,
				'photo' => $photo
			);

				$this->m_pjsb->insert_data($data,'data');
			}
						
			redirect(base_url().'admin/data');
		}
}
