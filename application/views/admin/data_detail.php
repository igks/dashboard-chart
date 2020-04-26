<div class="container-fluid">
	<div class="flash" data-flash="<?= $this->session->flashdata('pesanubah');?>"></div>
	<div class="page-header">
		<h4 class="mt-2 mb-3 ml-1">
			<strong>
				Detail Data
			</strong>
		</h4>
		<h6>
			<a class="btn btn-primary" href="<?php echo base_url().'admin/data' ?>">Data List</a>
		</h6>
	</div>
	<hr>

	<?php if(isset($data)) :?>
		<center>
			<img class="img-profil img-fluid rounded-circle" src = "<?php echo base_url().'img_upload/'.$data->photo;?>" alt="photo data">
		</center>
			<hr>
		<div class="row">
			<div class="col-md-6">
				<div class="table-title">
					Data I
				</div>
				<table>
				<tr>
					<td class="tabel-detail-data">NIS</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->nomor_induk;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Nama</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->nama;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Jenis Kelamin</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->kelamin;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Tempat lahir</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->tempat_lahir;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Tanggal lahir</td>
					<?php $newDate = date_create($data->tanggal_lahir); ?>
					<td class="tabel-detail-data"><?php echo ":". "  " .date_format($newDate, 'j M Y');?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">No HP</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->nomor_hp;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Alamat rumah</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->alamat_rumah;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Nomor Induk Nasional</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->nin;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Nama Sekolah</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->nama_sekolah;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Kelas</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->kelas;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Telp sekolah</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->telp_sekolah;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Fax sekolah</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->fax_sekolah;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Nama Kepala sekolah</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->kepala_sekolah;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Alamat sekolah</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->alamat_sekolah;?></td>
				</tr>
				<tr>
					<td class="tabel-detail-data">Nomor Induk Nasional</td>
					<td class="tabel-detail-data"><?php echo ":". "  " .$data->nin;?></td>
				</tr>
				</table>
			</div>
			<div class="col-md-6">
				<div class="table-title">
					Data II
				</div>
				<table>
					<tr>
						<td class="tabel-detail-data">Nama Ayah/Wali</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->ayah_wali;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Pekerjaan ayah</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->pekerjaan_ayah;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">No HP</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->nomor_hp_ayah;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Alamat</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->alamat_ayah;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Nama Ibu/Wali</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->ibu_wali;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Pekerjaan</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->pekerjaan_ibu;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">No HP</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->nomor_hp_ibu;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Alamat</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->alamat_ibu;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Anak ke 1</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->anak_i;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Anak ke 2</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->anak_ii;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Anak ke 3</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->anak_iii;?></td>
					</tr>
					<tr>
						<td class="tabel-detail-data">Anak ke 4</td>
						<td class="tabel-detail-data"><?php echo ":". "  " .$data->anak_iv;?></td>
					</tr>	
				</table>
			</div>
		</div>
			
			<hr>
	<?php endif; ?>
</div>