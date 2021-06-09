<!DOCTYPE html>
<html>
<head>
	<title>Form KRS</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/HeroSection.css'); ?>">

	<script type='text/javascript' src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
</head>
<body>
<div class="hero-container">
  <div
    style="width: 45%; position: absolute; right: 20px"
    class="form-container"
  >
	<?php echo form_open("mahasiswa/KRS/tambah"); ?>
  <form style="width: 100%; height: 100%">
      <div
        style="width: 100%; height: 27%; display: block"
        class="firstForm"
      >
        <h2
          style="font-size: 20px; font-family: Montserrat"
        >
          Form KRS
        </h2>
		<label>Matakuliah yang ingin ditambah</label>
    <select type="text"class="form-control" name="input_kodeMk" placeholder="Nama Matakuliah" value="<?php echo set_value('input_kodeMk'); ?>">
			<?php
			if( ! empty($matakuliah)){
				foreach($matakuliah as $data){
					echo "
					<option value=".$data->kode_mk.">".$data->nama_mk." - ".$data->kode_mk."</option>
					";
				}
			}
			?>
			</select>
      <br />
        <input
          type="submit"
          value="Simpan"
          class="submit"
          name="submit"
          id="submit"
        />
      </div>
    </form>
	<?php echo form_close(); ?>
  </div>
  <div class="foto" style="margin-right: 60%">
    <img
      style="max-height: 100%; max-width: 100%"
      src="<?=base_url('assets/images/GKB.jpg');?>"
    />
  </div>
</div>
</body>
</html>