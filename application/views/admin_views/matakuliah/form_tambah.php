<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah - Data Matakuliah</title>
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
	<?php echo form_open("admin/matakuliah/tambah"); ?>
  <form style="width: 100%; height: 100%">
      <div
        style="width: 100%; height: 27%; display: block"
        class="firstForm"
      >
        <h2
          style="font-size: 20px; font-family: Montserrat"
        >
          Form Tambah Matakuliah
        </h2>
		<label>Kode Matakuliah</label>
        <input type="text" name="input_kodeMk" placeholder="Kode Matakuliah" style="padding: 5px " />
        <label>Nama Matakuliah</label>
        <input type="text" name="input_namaMk" placeholder="Nama Matakuliah" style="padding: 5px " />
        <label>SKS</label>
        <input type="text" name="input_sksMk" placeholder="SKS" style="padding: 5px " />
        <label>Semester</label>
        <input type="text" name="input_semesterMk" placeholder="Semester" style="padding: 5px " />
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