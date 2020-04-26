<div class="container-fluid">
	<div class="flash" data-flash="<?= $this->session->flashdata('pesan');?>"></div>
	<div class="page-header">
		<h4 class="mt-2 mb-3 ml-1">
			<strong>Data List</strong>
		</h4>
		<hr>
	</div>
		<a class="btn btn-primary mb-2 ml-2" href="<?php echo base_url().'admin/data_add' ?>"><i class="fas fa-plus"></i> Data baru</a> <br>
		<!-- <a href="<?php echo base_url().'sqlinject/injectdata' ?>"> Inject Data</a> -->

		
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover display" id="table-data">
				<thead>
					<tr class="tabel-header1">
						<th class="tabel-header1">No</th>
						<th class="tabel-header1">NIS</th>
						<th class="tabel-header1">Nama</th>
						<th class="tabel-header1">Kelas</th>
						<th class="tabel-header1">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$no = 1;
					foreach($data as $s) :
						if ($no%2 == 0){
							echo "<tr class='row-genap'>";
						}
						else{
							echo "<tr>";
						}
						?>
						<td><?php echo $no++; ?></td>
						<td><?php echo $s->nomor_induk?></td>
						<td><?php echo $s->nama?></td>
						<td><?php echo $s->kelas?></td>
						<td> 
							<a class="badge badge-info btn-opsi" href="<?php echo base_url().'admin/data_detail/'.$s->id ?>"><i class="fas fa-info"></i> Detail</a>
							<a class="badge badge-warning btn-opsi" href="<?php echo base_url().'admin/data_edit/'.$s->id ?>" ><i class="fas fa-edit"></i> Ubah</a>
							<a class="badge badge-danger btn-opsi tombolHapus" href="<?php echo base_url().'admin/do_data_delete/'.$s->id ?>"><i class="fas fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	</div>
</div>