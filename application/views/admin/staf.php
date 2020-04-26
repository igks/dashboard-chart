<div class="container-fluid">
	<div class="page-header">
		<h5 class="mt-2 mb-3 ml-1">
    <strong>Detail Guru dan Staf </strong></h5>
		<hr>
	</div>

	<a href="<?php echo base_url().'admin/staf_add' ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Guru/Staf baru</a>
	<br></br>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover" id="table-datatable">
			<thead>
				<tr class="tabel-header1">
					<th class="tabel-header1">No.</th>
					<th class="tabel-header1">Nama</th>
					<th class="tabel-header1">Jabatan</th>
					<th class="tabel-header1">Pilihan</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$no = 1;
				foreach($staf as $s):
					if ($no%2 == 0){
						echo "<tr class='row-genap'>";
					}
					else{
						echo "<tr>";
					}
					?>
					<td><?php echo $no++; ?></td>
					<td><?php echo $s->staf_nama?></td>
					<td><?php echo $s->staf_jabatan?></td>
					<td> 
						<a class="btn btn-warning btn-sm" href="<?php echo base_url().'admin/staf_detail/'.$s->staf_id; ?>"><span class="glyphicon glyphicon-info-sign"></span> Detail</a>
						<a class="btn btn-danger btn-sm" href="<?php echo base_url().'admin/mobil_hapus/'.$s->staf_id; ?>"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>
</div>