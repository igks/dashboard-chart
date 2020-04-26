<div class="container">
  <?php if(validation_errors()):?>
    <div class="alert alert-danger">
      <?php echo validation_errors(); ?>
    </div>
  <?php endif; ?>
	<div class="card mt-3">
    <div class="card-header bg-primary">
  	    <h5 class="text-light font-weight-bold">
  	    	Tambah Data Baru
  	    	<a class="float-right" href="<?php echo base_url().'admin/data' ?>" ><span class="btn btn-danger font-weight-bold" >&times;</span></a>
  	    </h5>
    </div>
    <div class="card-body">
    	<form action="<?php echo base_url().'admin/do_data_add' ?>" method="post" enctype="multipart/form-data">
    		<div class="form-group">
    			<label for="nama_data">Nama</label>
    			<input id="nama_data" type="text" name="nama_data" class="form-control" autocomplete="off">
          <!-- <?php echo form_error('nama_data'); ?> -->
    		</div>
    		<div class="form-group">
    			<label style="display: block;">Jenis kelamin</label>
    			<label class="container-input"> Laki - laki
    				<input type="radio"  name="kelamin" value="laki-laki" checked>
    				<span class="checkmark"></span>
    			</label>
    			<label class="container-input"> Perempuan
    				<input type="radio" name="kelamin" value="perempuan">
    				<span class="checkmark"></span>
    			</label>
    		</div>
    		<div class="form-group">
    			<label for="tempat_lahir">Tempat lahir</label>
    			<input id="tempat_lahir" type="text" name="tempat_lahir" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('tempat_lahir'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="tanggal_lahir">Tanggal lahir</label>
    			<input id="tanggal_lahir" type="date" name="tanggal_lahir" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('tanggal_lahir'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="no_hp">No Telp/HP</label>
    			<input id="no_hp" type="text" name="no_hp" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('no_hp'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="alamat_rumah">Alamat rumah</label>
    			<input id="alamat_rumah" type="text" name="alamat_rumah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('alamat_rumah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="nin">Nomor Induk Nasional</label>
    			<input id="nin" type="text" name="nin" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('nin'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="nama_sekolah">Nama sekolah</label>
    			<input id="nama_sekolah" type="text" name="nama_sekolah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('nama_sekolah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="kelas">Kelas</label>
    			<input id="kelas" type="text" name="kelas" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('kelas'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="nomor_induk">Nomor Induk</label>
    			<input id="nomor_induk" type="text" name="nomor_induk" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('nomor_induk'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="no_telp_sekolah">No telp sekolah</label>
    			<input id="no_telp_sekolah" type="text" name="no_telp_sekolah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('no_telp_sekolah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="no_fax_sekolah">No fax sekolah</label>
    			<input id="no_fax_sekolah" type="text" name="no_fax_sekolah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('no_fax_sekolah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="nama_kepala_sekolah">Nama Kepala sekolah</label>
    			<input id="nama_kepala_sekolah" type="text" name="nama_kepala_sekolah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('nama_kepala_sekolah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="alamat_sekolah">Alamat sekolah</label>
    			<input id="alamat_sekolah" type="text" name="alamat_sekolah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('alamat_sekolah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="nama_ayah">Nama Ayah/Wali</label>
    			<input id="nama_ayah" type="text" name="nama_ayah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('nama_ayah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="pekerjaan_ayah">Pekerjaan</label>
    			<input id="pekerjaan_ayah" type="text" name="pekerjaan_ayah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('pekerjaan_ayah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="no_hp_ayah">No Telp/HP</label>
    			<input id="no_hp_ayah" type="text" name="no_hp_ayah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('no_hp_ayah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="alamat_ayah">Alamat</label>
    			<input id="alamat_ayah" type="text" name="alamat_ayah" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('alamat_ayah'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="nama_ibu">Nama Ibu/Wali</label>
    			<input id="nama_ibu" type="text" name="nama_ibu" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('nama_ibu'); ?> -->
    		</div>
    		<div class="form-group"> 
    			<label for="pekerjaan_ibu">Pekerjaan</label>
    			<input id="pekerjaan_ibu" type="text" name="pekerjaan_ibu" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('pekerjaan_ibu'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="no_hp_ibu">No Telp/HP</label>
    			<input id="no_hp_ibu" type="text" name="no_hp_ibu" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('no_hp_ibu'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="alamat_ibu">Alamat</label>
    			<input id="alamat_ibu" type="text" name="alamat_ibu" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('alamat_ibu'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="anak_i">Anak I</label>
    			<input id="anak_i" type="text" name="anak_i" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('anak_i'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="anak_ii">Anak II</label>
    			<input id="anak_ii" type="text" name="anak_ii" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('anak_ii'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="anak_iii">Anak III</label>
    			<input id="anak_iii" type="text" name="anak_iii" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('anak_iii'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="anak_iv">Anak IV</label>
    			<input id="anak_iv" type="text" name="anak_iv" class="form-control" autocomplete="off">
    			<!-- <?php echo form_error('anak_iv'); ?> -->
    		</div>
    		<div class="form-group">
    			<label for="photo">Photo</label>
    			<p>file = jpg | jpeg | png</p>
    			<p>size max = 300 kb</p>
    			<input type="file" name="photo" id="image-source" onchange="previewImage();">
                <img style="margin-top: 20px; margin-bottom: 30px;" class="img-fluid rounded-circle" id="image-preview" src="">
    		</div>
    		<a class="btn btn-secondary" href="<?php echo base_url().'admin/data' ?>" >Close</a>
    		<button type="submit" class="btn btn-primary">Simpan</button>
    	</form>
    </div>
  </div>	
</div>
