<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah - Data Matakuliah</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script "<?php echo base_url() ?>assets/js/javascript.js"></script>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="row">
                    <div class="col-sm-6">
	<h1>Form Tambah <b>Data Matakuliah</b></h1>
	</div>
</div>
</div>
</div>
</div>
	<hr>
	<div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("admin/matakuliah/tambah"); ?>
	<table cellpadding="8">
		<tr>
			<div class="form-group">
         <div class="row">
         	<div class="col-sm-6 col-md-6 col-xs-6">
			<td>Kode Matakuliah</td>
			<td><input type="text"class="form-control" name="input_kodeMk" placeholder="Kode Matakuliah" value="<?php echo set_value('input_kodeMk'); ?>"></td>
		</div>
		</tr>
		<tr>
			<td>Nama Matakuliah</td>
			<td><input type="text" class="form-control" name="input_namaMk" placeholder="Nama Matakuliah" value="<?php echo set_value('input_namaMk'); ?>"></td>
		</tr>
		<tr>
			<td>SKS</td>
			<td><input type="text" class="form-control" name="input_sksMk" placeholder="SKS" value="<?php echo set_value('input_sksMk'); ?>"></td>
		</tr>
		<tr>
			<td>Semester</td>
			<td><input class="form-control" name="input_semesterMk" placeholder="Semester"><?php echo set_value('input_semesterMk'); ?></input></td>
		</tr>
	</table>

	<hr>
	<div class="control-group">
		<div class="controls">
	<input type="submit" name="submit" button class="btn btn-success" value="Simpan">
	<a href="<?php echo site_url('admin/Matakuliah'); ?>"><input type="button" button class="btn btn-danger" value="Batal"></a>
	<?php echo form_close(); ?>
</body>
</html>