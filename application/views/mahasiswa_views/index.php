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

<div class="hero-container">

  <div class="tabel">
    <h2 style="font-size: 20px; font-family: Montserrat">
      Kartu Rencana Studi <?php echo $mahasiswa_yang_login[0]->nama;?>
    </h2>
    <br />
    <br />
    <table style="width: 80%; margin-left: 10%">
      <tr>
	  	<th>Kode Matakuliah </th>
		<th>Nama Matakuliah </th>
		<th>Hapus</th>
      </tr>
	  <?php
		if( ! empty($matakuliah_diambil_mahasiswa)){
			foreach($matakuliah_diambil_mahasiswa as $data){
				echo "<tr>
				<td>".$data->kode_mk."</td>
				<td>".$data->nama_mk."</td>
				<td><center><a href='".base_url("mahasiswa/krs/hapus/".$data->kode_mk)."'>Hapus</a></center></td>
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