<?php
if(!empty($notif)){
  echo '<div class="alert alert-danger">';
  echo $notif;
  echo "</div>";
}

?>

<form method="post" id="form-pinjam" enctype="multipart/form-data" action="<?php echo base_url();?>index.php/pinjam/simpan">
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
        <div class="panel panel-primary">
        <div class="panel-heading">Pemasukkan Data Buku </div>
          <div class="panel-body">
                  <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i></span>
              <input type="text" id="judul_buku" name="judul_buku" autofocus value="" placeholder="Masukkan Judul Buku" class="form-control"/>
          </div>

          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
            <input type="file" id="gambar_buku" name="gambar buku" autofocus class="form-control" required />
          </div>
          <br>

          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-info-sign"></i></span>
            <input type="text" id="deskripsi" name="deskripsi" autofocus value="" placeholder="deskripsi buku" class="form-control"/>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
      <input type="submit" name="submit" value="PINJAM" class="btn btn-block btn-md btn-primary">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
      <input type="reset" name="reset" value="RESET" class="btn btn-block btn-md btn-danger">
    </div>
  </div>
</form>
