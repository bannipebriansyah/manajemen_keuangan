
	<?php if (empty($tgl_mulai) && !empty($tgl_sampai) && !empty($result)) { ?>
		<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<p class="mb-0">Tanggal periode belum ditentukan dengan benar</p>
		</div>
		<p><a href="<?=base_url('p/laporan');?>"><button type="button" class="btn btn-primary">Kembali ke Laporan</button></a></p>
	<?php } else if (empty($tgl_mulai) && !empty($tgl_sampai) && empty($result)) { ?>
		<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<p class="mb-0">Tanggal periode belum ditentukan dengan benar</p>
		</div>
		<p><a href="<?=base_url('p/laporan');?>"><button type="button" class="btn btn-primary">Kembali ke Laporan</button></a></p>
	<?php } else if (!empty($tgl_mulai) && empty($tgl_sampai) && empty($result)) { ?>
		<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<p class="mb-0">Tanggal periode belum ditentukan dengan benar</p>
		</div>
		<p><a href="<?=base_url('p/laporan');?>"><button type="button" class="btn btn-primary">Kembali ke Laporan</button></a></p>
	<?php } else if (empty($tgl_mulai) && empty($tgl_sampai) && empty($result)) { ?>
		<div class="alert alert-dismissible alert-warning">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<p class="mb-0">Tanggal periode belum ditentukan dengan benar</p>
		</div>
		<p><a href="<?=base_url('p/laporan');?>"><button type="button" class="btn btn-primary">Kembali ke Laporan</button></a></p>
	<?php } else if (!empty($tgl_mulai) && !empty($tgl_sampai) && empty($result)) { ?>
		<p><a href="<?=base_url('p/laporan');?>"><button type="button" class="btn btn-primary">Kembali ke Laporan</button></a></p>
		<h4>Laporan Periode</h4>
		<p>Tanggal <strong><?=date('d/m/Y', strtotime($tgl_mulai));?></strong> s.d <strong><?=date('d/m/Y', strtotime($tgl_sampai));?></strong></p>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Jenis</th>
					<th scope="col">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="5" align="center">Tidak ada data</td>
				</tr>
			</tbody>
		</table>
	<?php } else if (!empty($tgl_mulai) && !empty($tgl_sampai) && !empty($result)) { ?>
		<p><a href="<?=base_url('p/laporan');?>"><button type="button" class="btn btn-primary">Kembali ke Laporan</button></a></p>
		<h4>Laporan Periode</h4>
		<div class="btn-group">
	<a class="btn btn-warning btn-sm" href="<?php echo base_url().'p/laporan_periode_pdf/?tgl_mulai='.set_value('tgl_mulai').'&tgl_sampai='.set_value('tgl_sampai') ?>"><span class="glyphicon glyphicon-print"></span> Cetak PDF</a>	
	<a class="btn btn-default btn-sm" href="<?php echo base_url().'p/laporan_periode_print/?tgl_mulai='.set_value('tgl_mulai').'&tgl_sampai='.set_value('tgl_sampai') ?>"><span class="glyphicon glyphicon-print"></span> Print</a>	
</div>
<br><br/>
		<p>Tanggal <strong><?=date('d/m/Y', strtotime($tgl_mulai));?></strong> s.d <strong><?=date('d/m/Y', strtotime($tgl_sampai));?></strong></p>
		<table class="table table-bordered table-hover table-striped" id="table-datatable">
			<thead>
				<tr>
					<th scope="col">Nomor</th>
					<th scope="col">Keterangan</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Jumlah</th>
					<th scope="col">Jenis</th>
					<th scope="col">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($result as $data) { ?>
				<tr>
					<td><?=$data->nomor;?></td>
					<td><?=$data->keterangan;?></td>
					<td><?=date('d/m/Y', strtotime($data->tanggal));?></td>
					<td>Rp <?=number_format($data->jumlah,2,',','.');?></td>
					<td><?=ucwords($data->jenis);?></td>
					<?php
					if ($data->jenis == 'masuk'){
						$uri = 'pemasukan';
					}else{
						$uri = 'pengeluaran';
					}
					?>
					<td>
						<a class="btn btn-sm btn-warning" href="<?=base_url('p/ubah_'.$uri.'/'.$data->nomor);?>"><span class="glyphicon glyphicon-wrench">Ubah</span></a> &nbsp; 
						<a class="btn btn-sm btn-danger" href="<?=base_url('p/hapus_'.$uri.'/'.$data->nomor);?>"><span class="glyphicon glyphicon-trash">Hapus</span></a>
					</td>
				</tr>
			<?php } ?>
			</tbody>
			<thead>
			<?php
				error_reporting(0);
				foreach ($ttl_masuk as $total_masuk) {
					$jumlah_masuk += $total_masuk->jumlah;
				}
				foreach ($ttl_keluar as $total_keluar) {
					$jumlah_keluar += $total_keluar->jumlah;
				}
				$jumlah = $jumlah_masuk-$jumlah_keluar;
			?>
				<tr>
					<th colspan="3" scope="col">TOTAL <small>(Pemasukan dan Pengeluaran Tanggal <?=date('d/m/Y', strtotime($tgl_mulai));?> s.d <?=date('d/m/Y', strtotime($tgl_sampai));?>)</small></th>
					<th scope="col">Rp. <?=number_format($jumlah,2,',','.');?></th>
					<th colspan="2" scope="col">&nbsp;</th>
				</tr>
			</thead>
		</table>
	<?php 
		echo $halaman; 
	} 
	?>
