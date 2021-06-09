<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah - Data Matakuliah</title>
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
  <?php echo form_open("admin/matakuliah/ubah/".$matakuliah->kode_mk); ?>
    <form style="width: 100%; height: 100%">
      <div
        style="width: 100%; height: 27%; display: block"
        class="firstForm"
      >
        <h2
          style="font-size: 20px; font-family: Montserrat"
        >
          Form Ubah Data Matakuliah
        </h2>
		<label>Kode Matakuliah</label>
        <input type="text" name="input_kodeMk" value="<?php echo set_value('input_kodeMk', $matakuliah->kode_mk); ?>" placeholder="Kode Matakuliah" style="padding: 5px " />
        <label>Nama Matakuliah</label>
        <input type="text" name="input_namaMk" value="<?php echo set_value('input_namaMk', $matakuliah->nama_mk); ?>" placeholder="Nama Matakuliah" style="padding: 5px " />
        <label>SKS</label>
        <input type="text" name="input_sksMk" value="<?php echo set_value('input_sksMk', $matakuliah->sks_mk); ?>" placeholder="SKS" style="padding: 5px " />
        <label>Semester</label>
        <input type="text" name="input_semesterMk" value="<?php echo set_value('input_semesterMk',$matakuliah->semester_mk); ?>" placeholder="Semester" style="padding: 5px " />
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