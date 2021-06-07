<!DOCTYPE html>
<html>
<head>

	<title>CRUD Codeigniter</title>
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
	<div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Data <b>Matakuliah</b> </h2></div>
                    <div class="col-sm-4">
                    	<?php echo form_open('admin/matakuliah/search') ?>
		<input type="text" name="keyword" class="form-control" placeholder="Search&hellip;">
				<input type="submit" name="search_submit" button class="btn btn-success" value="Cari">

	<?php echo form_close() ?>

                        
                            
                        </div>
                    </div>
					<a class="btn btn-primary" href="<?= site_url('login/logout') ?>">Logout</a>
					<a class="btn btn-primary" href="<?= site_url('admin/Mahasiswa') ?>">Mahasiswa</a>

                </div>
            </div>
	<hr>
	<button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i><a href='<?php echo base_url("admin/matakuliah/tambah"); ?>'>
	Tambah Data</a></button>

	<br><br>
	<table class="table table-striped table-hover table-bordered"border="1" cellpadding="7">
		<?php foreach($matakuliah as $data) {?>
				<tr>
					
				</tr>
			<?php } ?>
	<hr>


		<tr>

			<th>Kode Matakuliah <i class="fa fa-sort"> </th>
			<th>Nama <i class="fa fa-sort"> </th>
			<th>SKS</th>
			<th>Semester</th>
			<th class=""colspan="2"><center>Aksi</center></th>
		
		</tr>
		<?php
		if( ! empty($matakuliah)){
			foreach($matakuliah as $data){
				echo "<tr>
				<td>".$data->kode_mk."</td>
				<td>".$data->nama_mk."</td>
				<td>".$data->sks_mk."</td>
				<td>".$data->semester_mk."</td>
				<td ><center><a href='".base_url("admin/matakuliah/ubah/".$data->kode_mk)."'>Ubah</a></center></td>
				<td><center><a href='".base_url("admin/matakuliah/hapus/".$data->kode_mk)."'>Hapus</a></center></td>
				</tr>";

			}
		}
		else{
			echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";
		}
		?>
	</table>

	
                </ul>
            </div>
        </div>
    </div>

</body>
</html>