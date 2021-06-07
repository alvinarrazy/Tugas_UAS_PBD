<html>
  <head>
    <title>Form Ubah - Data Matakuliah</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script srchttps://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script "<?php echo base_url() ?>assets/js/javascript.js"></script>
<link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="row">
                    <div class="col-sm-6">
  <h1>Form Ubah <b>Data Matakuliah</b></h1>
  </div>
</div>
</div>
</div>
</div>

    <hr>
    <!-- Menampilkan Error jika validasi tidak valid -->
    <div style="color: red;"><?php echo validation_errors(); ?></div>
    <?php echo form_open("admin/matakuliah/ubah/".$matakuliah->kode_mk); ?>
      <table cellpadding="8">
        <tr>
          <td>Kode Matakuliah</td>
          <td><input type="text" class="form-control" name="input_kodeMk" placeholder="Kode Matakuliah" value="<?php echo set_value('input_kodeMk', $matakuliah->kode_mk); ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama Matakuliah</td>
          <td><input type="text" class="form-control" name="input_namaMk" placeholder="Nama Matakuliah" value="<?php echo set_value('input_namaMk', $matakuliah->nama_mk); ?>"></td>
        </tr>
        <tr>
          <td>SKS</td>
          <td><input type="text" class="form-control" name="input_sksMk" placeholder="SKS" value="<?php echo set_value('input_sksMk', $matakuliah->sks_mk); ?>"></td>
        </tr>
        <tr>
          <td>Semester</td>
          <td><input class="form-control" name="input_semesterMk" placeholder="Semester" value="<?php echo set_value('input_semesterMk', $matakuliah->semester_mk); ?>"></input></td>
        </tr>
      </table>
        
      <hr>
      <input type="submit" name="submit" button class="btn btn-success" value="Ubah">
      <a href="<?php echo site_url('admin/Matakuliah'); ?>"><input type="button" button class="btn btn-danger" value="Batal"></a>
    <?php echo form_close(); ?>
  </body>
</html>