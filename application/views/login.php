<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/RegForm.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/navbar.css'); ?>">

	<script type='text/javascript' src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
</head>
<body>
<div class="header">
  <div class="left" style="margin-top: 7px">
    <div
      style="
        float: right;
        margin-left: 30px;
        padding-top: 7px;
      "
    >
      SISTEM INFORMASI AKADEMIK
    </div>
  </div>
  <div class="right">
    <img
      style="
        margin-top: 4px;
        margin-right: 10px;
        height: 50px;
      "
      src="<?=base_url('assets/images/UNDIP.png');?>"
    />
    <img
      style="height: 50px; margin-top: 4px"
      src="<?=base_url('assets/images/Himaskom.png');?>"
    />
  </div>
</div>

<div style="margin-top: 100px" class="login-form">
  <h1>SIA Teknik Komputer</h1>
  <div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("login"); ?>
 
  <form>
    <input
      type="text"
      name="input_nim"
      placeholder="NIM"
      required=""
    />
    <input
      type="text"
      name="input_nama"
      placeholder="Nama Mahasiswa"
      required=""
    />
    <input type="submit" name="submit" value="Log in" />
  </form>
  <?php echo form_close(); ?>
</div>

</body>
</html>