<div class="page-header">
	<h3>Profile Guru/Staf</h3>
</div>
<?php foreach ($staf as $s) : ?>
<center>
	<img class="img-profil img-circle" src = "<?php echo base_url().'img_upload/'.$s->staf_photo;?>" alt="photo guru/staf">
	<hr>
	<table>
		<tr>
			<td class="tabel-detail-siswa">Nama</td>
			<td class="tabel-detail-siswa"><?php echo $s->staf_nama;?></td>
		</tr>
		<tr>
			<td class="tabel-detail-siswa">Jabatan</td>
			<td class="tabel-detail-siswa"><?php echo $s->staf_jabatan;?></td>
		</tr>
		<tr>
			<td class="tabel-detail-siswa">No Hp</td>
			<td class="tabel-detail-siswa"><?php echo $s->staf_nohp;?></td>
		</tr>
		<tr>
			<td class="tabel-detail-siswa">Alamat</td>
			<td class="tabel-detail-siswa"><?php echo $s->staf_alamat;?></td>
		</tr>
	</table>
	<hr>
</center>
<?php endforeach; ?>