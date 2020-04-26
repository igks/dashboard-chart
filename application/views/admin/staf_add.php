<div class="page-header">
	<h3>Daftar Guru/Staf Baru</h3>
</div>

<form action="<?php echo base_url().'admin/staf_add_act' ?>" method="post" enctype="multipart/form-data"> 
	<div class="form-group">
		<label>Nama</label> <span class="not-null">(Tidak boleh kosong)</span>
		<input type="text" name="nama" class="form-control">
		<?php echo form_error('nama'); ?>
	</div>
	<div class="form-group">
		<label>Struktur</label> <span class="not-null">(Tidak boleh kosong)</span>
		<!-- <input type="text" name="nama" class="form-control"> -->
		<select name="struktur" class="form-control">
		  <option value="Guru">Guru</option>
		  <option value="Staf">Staf</option>
		</select> 
		<?php echo form_error('struktur'); ?>
	</div>
	<div class="form-group">
		<label>Jabatan</label> <span class="not-null">(Tidak boleh kosong)</span>
		<input type="text" name="jabatan" class="form-control">
		<?php echo form_error('jabatan'); ?>
	</div>
	<div class="form-group">
		<label>No Hp</label> <span class="not-null">(Tidak boleh kosong)</span>
		<input type="text" name="nohp" class="form-control">
		<?php echo form_error('nohp'); ?>
	</div>
	<div class="form-group">
		<label>Alamat</label> <span class="not-null">(Tidak boleh kosong)</span>
		<input type="text" name="alamat" class="form-control">
		<?php echo form_error('alamat'); ?>
	</div>
	<div class="form-group">
		<label>Photo</label>
		<p>file = jpg | jpeg | png</p>
		<p>size max = 100 kb</p>
		<p>width max = 350 pixel</p>
		<p>hight max = 400 pixel</p>
		<img id="image-preview" alt="image preview"/>
		<br>
		<input name="photo" type="file" id="image-source" onchange="previewImage();"/>
	</div>
	<br>
	<div class="form-group">
		<input type="submit" value="Simpan" class="btn btn-primary">
	</div>
</div>
</form>