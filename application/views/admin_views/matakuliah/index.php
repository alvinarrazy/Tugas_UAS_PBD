<!DOCTYPE html>
<html>	
<head>

	<title>Data Mahasiswa
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/HeroSection.css'); ?>">

	<script type='text/javascript' src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	
</head>
<body>
<?php echo form_open('admin/matakuliah/search') ?>
<div style="position: absolute; top: 65px; right: 10px; z-index: 1;" class="searchmahasiswa"
>
  <input type="text" name="keyword" placeholder="Search&hellip;">
  <input type="submit" name="search_submit" button class="btn btn-success" value="Cari">
</div>
<?php echo form_close() ?>

<div class="hero-container">

  <div class="tabel">
    <h2 style="font-size: 20px; font-family: Montserrat">
      Informasi Matakuliah
    </h2>
    <br />
    <br />
    <table style="width: 80%; margin-left: 10%">
      <tr>
	  	<th>Kode Matakuliah</th>
		<th>Nama</th>
		<th>SKS</th>
		<th>Semester</th>
		<th class=""colspan="2"><center>Aksi</center></th>
      </tr>
      <?php
		if( ! empty($matakuliah)){
			foreach($matakuliah as $data){
				echo "<tr>
				<td>".$data->kode_mk."</td>
				<td>".$data->nama_mk."</td>
				<td>".$data->sks_mk."</td>
				<td>".$data->semester_mk."</td>
				<td ><center><a href='".base_url("admin/matakuliah/ubah/".$data->kode_mk)."'>Ubah</a></center></td>
				<td><center><a href='".base_url("admin/matakuliah/hapus/".$data->kode_mk)."'>Hapus</a></center></td>
				</tr>";

			}
		}
		else{
			echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
		}
		?>
    </table>
  </div>
</div>
</body>
</html>