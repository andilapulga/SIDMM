<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Data Desa</title>
	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>" rel="stylesheet">
</head>
<body>

<div class="container">
	<h1>Data <small>Desa</small></h1>
	<table class="table table-bordered table-striped" id="mydata">
		<thead>
			<tr>
				<td>ID Desa</td>
				<td>ID Laporan</td>
				<td>Nama Kegiatan</td>
				<td>Jenis Kegiatan</td>
                <td>Tahap Kegiatan</td>
                <td>Tanggal Kegiatan</td>
                <td>Biaya Bahan</td>
                <td>Biaya Operasional</td>
                <td>Biaya Tak Terduga</td>
                <td>Total Biaya</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach($data->result_array() as $i):
                    $id_laporan=$i['id_lpaoran'];
                    $id_desa=$i['id_desa'];
					$nama=$i['nama_kegiatan'];
					$jenis=$i['jenis_kegiatan'];
                    $tahap=$i['tahap_kegiatan'];
                    $tanggal=$i['tanggal_kegiatan'];
                    $bahan=$i['biaya_bahan'];
                    $operasi=$i['biaya_operasional'];
                    $ttdg=$i['biaya_takterduga'];
                    $total=$i['total_biaya'];
			?>
			<tr>
				<td><?php echo $id_laporan;?></td>
				<td><?php echo $id_desa;?></td>
				<td><?php echo $nama;?></td>
				<td><?php echo $jenis;?></td>
                <td><?php echo $tahap;?></td>
                <td><?php echo $tanggal;?></td>
                <td><?php echo $bahan;?></td>
                <td><?php echo $operasi;?></td>
                <td><?php echo $ttdg;?></td>
                <td><?php echo $total;?></td>
                
			</tr>
			<?php endforeach;?>
		</tbody>
	</table>
	
</div>

<script src="<?php echo base_url().'assets/js/jquery-2.2.4.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/moment.js'?>"></script>
<script>
	$(document).ready(function(){
		$('#mydata').DataTable();
	});
</script>
</body>
</html>