<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah - Data Mahasiswa</title>
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
	<h1>Form Tambah <b>Data Mahasiswa</b></h1>
	</div>
</div>
</div>
</div>
</div>
	<hr>
	<div style="color: red;"><?php echo validation_errors(); ?></div>
	<?php echo form_open("mahasiswa/KRS/tambah"); ?>
	<table cellpadding="8">
		<tr>
			<div class="form-group">
         <div class="row">
         	<div class="col-sm-6 col-md-6 col-xs-6">
			<td>Nama Matakuliah</td>
			<td>
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
			</td>
		</div>
		</tr>
	</table>

	<hr>
	<div class="control-group">
		<div class="controls">
	<input type="submit" name="submit" button class="btn btn-success" value="Simpan">
	<a href="<?php echo site_url("mahasiswa/KRS"); ?>"><input type="button" button class="btn btn-danger" value="Batal"></a>
	<?php echo form_close(); ?>
</body>
</html>