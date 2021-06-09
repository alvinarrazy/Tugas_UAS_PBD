<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah - Data Mahasiswa</title>
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
  <?php echo form_open("admin/mahasiswa/ubah/".$mahasiswa->nim); ?>
    <form style="width: 100%; height: 100%">
      <div
        style="width: 100%; height: 27%; display: block"
        class="firstForm"
      >
        <h2
          style="font-size: 20px; font-family: Montserrat"
        >
          Form Ubah Data Mahasiswa
        </h2>
		<label>NIM</label>
        <input type="text" name="input_nim" value="<?php echo set_value('input_nim', $mahasiswa->nim); ?>" placeholder="NIM" style="padding: 5px " />
        <label>Nama</label>
        <input type="text" name="input_nama" value="<?php echo set_value('input_nama', $mahasiswa->nama); ?>" placeholder="Nama" style="padding: 5px " />
        <label>Jenis Kelamin</label>
        <select type="text" name="input_jeniskelamin" placeholder="Jenis Kelamin" style="padding: 5px " >
			<option value="Laki-Laki">Laki-Laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
        <label>Telepon</label>
        <input type="text" name="input_telp" value="<?php echo set_value('input_telp', $mahasiswa->telp); ?>" placeholder="Nomor Telepon" style="padding: 5px " />
        <label>Alamat</label>
        <input type="text" name="input_alamat" value="<?php echo set_value('input_alamat', $mahasiswa->alamat); ?>" placeholder="Alamat" style="padding: 5px "" />
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