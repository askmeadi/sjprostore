<section id="main-content">
<section class="wrapper">

<div class="row mt mb">

  <div class="col-md-12">

      <section class="task-panel tasks-widget">

  <div class="panel-heading">
   
    </div>
        <div class="panel-body">

<?php if($this->session->flashdata('success')) { ?>

<div class="alert alert-success"><center>
<?= $this->session->flashdata('success'); ?>
</center>
</div>
<?php } ?>

<?php if($this->session->flashdata('error')) { ?>

<div class="alert alert-danger"><center>
<?= $this->session->flashdata('error'); ?>
</center>
</div>
<?php } ?>

        <div class="form-group">
        <button class="btn btn-info" data-toggle="modal" data-target="#modalTambahAdmin">
          <i class="glyphicon glyphicon-plus"></i> Tambah Admin
        </button>
        </div>


        <form action="<?php echo site_url('admin/akun/delete_admin');?>" method="post"> 
        <div class="form-group">
        <button type="submit" class="btn btn-danger" value="action">
          <i class="glyphicon glyphicon-trash"></i> Hapus admin ditandai
        </button>
        </div>

<?php if (!empty($admin)) { ?>

              <div class="task-content">
                  <ul id="sortable" class="task-list">

<?php $i = 1; ?>
<?php foreach ($admin as $data) : ?>

                      <li class="list-primary">

                    <div class="task-checkbox">
                        <input type="checkbox" class="list-child" id="cekbox" name="cekbox[]" value="<?= $data['id_user'];?>" />
                    </div>

                      <div class="task-title">
                          <span><?=$i;?>. </span>
                          <span class="task-title-sp"><?=$data['username'];?></span>
                          <span class="badge bg-theme">ADMIN</span>
                          <div class="pull-right hidden-phone">
            <a href="<?= base_url().'admin/akun/delete/'.$data['id_user']?>" class="btn btn-danger btn-xs glyphicon glyphicon-trash" onclick="return confirm('Apakah anda yakin ?')"></a>
            <a class="btn btn-default btn-xs glyphicon glyphicon-pencil" href=""></a>
                          </div>
                      </div>
                      </li>

<?php $i++; ?>
<?php endforeach;?>

                  </ul>
              </div>

<?php } else { ?>

<div class="task-content">
    <ul id="sortable" class="task-list">
       <div class="notice notice-info">
        <center><strong>MAAF</strong> DATA KOSONG, SILAHKAN TAMBAH ENTRY DATA ADMIN.</center>
      </div>
 </ul>
</div>

<?php } ?>

               </form>
          </div>
          </section>
      </div><!--/col-md-12 -->
  </div><!-- /row -->

  </section>
</section>

<!-- modal tambah admin -->
<div class="modal fade" id="modalTambahAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

        <form action="<?= base_url();?>admin/akun/create_admin" id="formtambahadmin" method="POST">
        <div class="row">
          <div class="form-group">
            <input type="text" class="form-control" name="nama" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="password" placeholder="Password">
          </div>
        </div>
          
        <div class="row">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-default" id="btn-tambah-admin">Tambah</button>
        </div>
        </form>

      </div>
  </div>
  </div>
</div>
<!-- end -->
