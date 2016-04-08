<div class="container" >
<section id="main-content">
  <section class="wrapper">

    <div class="info-data-diri">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 toppad" >

<?php if($this->session->flashdata('success')) { ?>

<div class="alert alert-success"><center>
<?php echo $this->session->flashdata('success'); ?>
</center>
</div>
<?php } ?>

<?php if($this->session->flashdata('error')) { ?>

<div class="alert alert-danger"><center>
<?php echo $this->session->flashdata('error'); ?>
</center>
</div>
<?php } ?>
   
          <div class="panel panel-default">
          
            <div class="panel-body">

                <?php foreach ($person as $data): ?>

              <div class="row">
                <div class="col-md-2 col-lg-2 " align="center"> <img alt="User Pic" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" class="img-circle img-responsive"> </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                  
                      <tr>
                        <td>Nama </td>
                        <td><?=$data['nama']?></td>
                      </tr>
                       <tr>
                        <td>Email</td>
                        <td><?=$data['email']?></td>
                      </tr>
                      <tr>
                        <td>Alamat </td>
                        <td><?=$data['alamat']?>, <?=$data['nama_kelurahan']?>, <?=$data['nama_kecamatan']?>, <?=$data['nama_kabupaten']?>, <?=$data['nama_provinsi']?></td>
                      </tr>
                      <tr>
                        <td>Telepon</td>
                        <td><?=$data['telepon']?></td>
                      </tr>
                
                    </tbody>
                  </table>
                
                </div>
              </div>

            <span class="pull-right">
            <a type="button" class="btn btn-sm btn-primary edit-modal" data-toggle="modal" data-id="<?= $data['id_pelanggan'] ?>" 
              data-nama="<?= $data['nama'] ?>" data-email="<?= $data['email'] ?>" data-alamat="<?= $data['alamat'] ?>" 
              data-provinsi="<?= $data['nama_provinsi'] ?>" data-kabupaten="<?= $data['nama_kabupaten'] ?>" 
              data-kecamatan="<?= $data['nama_kecamatan'] ?>" data-kelurahan="<?= $data['nama_kelurahan'] ?>" 
              data-telepon="<?= $data['telepon'] ?>" data-target="#modal-userinfo">
                <i class="glyphicon glyphicon-edit"></i>
            </a>
            </span>

              <?php endforeach;?>

            </div>
          </div>

        </div>
        </div>
        </div>

</section>
</section>
</div>

<!-- modal edit user info -->
<div id="modal-userinfo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal">
    <span aria-hidden="true">×</span>
    <span class="sr-only">Close</span>
    </button>
    <div class="modal-header">

        <img src="<?=base_url() . 'asset/user/img/logo-sign.png'?>" class="img-responsive" id="logo-modal-sign">

    </div>

    <div class="modal-body">
   
      <form class="form-horizontal" id="form-edit-user" action="<?= base_url('user/data/edit');?>" method="POST">
      <input type="hidden" name="userid" value="">
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Nama</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Alamat</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" rows="3" id="alamat" placeholder="Alamat" name="alamat" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Provinsi</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" rows="3" id="provinsi_id" name="provinsi" placeholder="Alamat" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Kota</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" rows="3" id="kota_id" name="kota" placeholder="Alamat" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Kecamatan</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" rows="3" name="kecamatan" id="kecamatan_id" placeholder="Alamat" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Kelurahan</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" rows="3" name="kelurahan" id="kelurahan_id" placeholder="Alamat" value="">
        </div>
      </div>

      <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Telepon</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="phoneNumber" value="">
    </div></div>

      <div class="form-group">
      <div class="col-lg-12">
        <span class="pull-right">
        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        </span>
      </div>
    </div>
  </form>

    </div><!-- End of Modal body -->
    </div><!-- End of Modal content -->
    </div><!-- End of Modal dialog -->
</div><!-- End of Modal -->
