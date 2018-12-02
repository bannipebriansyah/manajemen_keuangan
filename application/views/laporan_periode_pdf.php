<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
	<style type="text/css">
		.table-data{
			width: 100%;			
			border-collapse: collapse;			
		}

		.table-data tr th,
		.table-data tr td{
			border:1px solid black;
			font-size: 10pt;
		}		
	</style>
	
	<h3>Laporan Periode</h3>	
	

	<table>
        <tr>
			<td>Dari Tgl</td>
			<td>:</td>
			<td><?php echo date('d/m/Y',strtotime($_GET['tgl_mulai'])); ?></td>
		</tr>
		<tr>
			<td>Sampai Tgl</td>
			<td>:</td>
			<td><?php echo date('d/m/Y',strtotime($_GET['tgl_sampai'])); ?></td>			
		</tr>
	</table>
	
	<br/>
	<table class="table-data">
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
					<th colspan="3" scope="col">TOTAL <small>(Pemasukan dan Pengeluaran Tanggal <?=date('d/m/Y', strtotime($data->tanggal));?>)</small></th>
					<th scope="col">Rp. <?=number_format($jumlah,2,',','.');?></th>
					<th colspan="2" scope="col">&nbsp;</th>
				</tr>
			</thead>
</table>
</body>
</html>
