<!DOCTYPE html>
<html>	
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/navbar.css'); ?>">
	<link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.13.1/css/all.css"
    integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q"
    crossorigin="anonymous"
    />
	<script type='text/javascript' src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
	<script type='text/javascript'>
		/* Set the width of the side navigation to 250px */
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
	</script>
</head>
<body>

<div class="header">
  <div class="left" style="margin-top: 7px">
    <div class="hamburg" style="float: left">
      <button
	  	onclick="openNav()"
        style="padding-left: 10px"
        class="navbar-toggler toggler-example"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent1"
        aria-controls="navbarSupportedContent1"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="dark-blue-text">
          <i class="fas fa-bars fa-1x"></i>
        </span>
      </button>
    </div>
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

<div class="sidenav" id="mySidenav">
  <a class="closebtn">
    <button class="close" aria-label="Close">
      <span onclick="closeNav()"aria-hidden="true">×</span>
    </button>
  </a>
  <div class="account-container">
    <div class="account-pic">
      <img src="<?=base_url('assets/images/administrator.png');?>" />
    </div>
    <div class="account-detail"><a>Administrator</a></div>
  </div>
  <br />
  <a href="<?= site_url('admin/matakuliah') ?>">Daftar Matakuliah</a>
  <a href="<?= site_url('admin/Mahasiswa') ?>">Daftar Mahasiswa</a>
  <a href="<?= site_url('admin/matakuliah/tambah') ?>">Tambah Matakuliah</a>
  <a href="<?= site_url('admin/mahasiswa/tambah') ?>">Tambah Mahasiswa</a>
  <hr />
  <br />
  <br />
  <br />
  <a href="<?= site_url('login/logout') ?>">Logout</a>
</div>
</body>
</html>