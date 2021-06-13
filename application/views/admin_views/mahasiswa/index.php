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
<?php echo form_open('admin/mahasiswa/search') ?>
<div style="position: absolute; top: 65px; right: 10px; z-index: 1;" class="searchmahasiswa"
>
  <input type="text" name="keyword" placeholder="Search&hellip;">
  <input type="submit" name="search_submit" button class="btn btn-success" value="Cari">
</div>
<?php echo form_close() ?>

<div class="hero-container">

  <div class="tabel">
    <h2 style="font-size: 20px; font-family: Montserrat">
      Informasi Mahasiswa
    </h2>
    <br />
    <br />
    <table style="width: 80%; margin-left: 10%">
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th class=""colspan="2"><center>Aksi</center></th>
      </tr>
      <?php
		if( ! empty($mahasiswa)){
			foreach($mahasiswa as $data){
				echo "<tr>
				<td>".$data->nim."</td>
				<td>".$data->nama."</td>
				<td>".$data->jenis_kelamin."</td>
				<td>".$data->telp."</td>
				<td>".$data->alamat."</td>
				<td ><center><a href='".base_url("admin/mahasiswa/ubah/".$data->nim)."'>Ubah</a></center></td>
				<td><center><a href='".base_url("admin/mahasiswa/hapus/".$data->nim)."'>Hapus</a></center></td>
				</tr>";

			}
		}		else{
			echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
		}
		?>
    </table>
  </div>
</div>
</body>
</html>