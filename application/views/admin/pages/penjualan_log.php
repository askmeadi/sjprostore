  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  	<div class="col-lg-12">
          <div class="content-panel">


          <section id="unseen">

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

          <form action="<?php echo site_url('admin/log/delete_order');?>" method="post">
            <div class="form-group">
              <button type="submit" class="btn btn-danger" value="action">
                <i class="glyphicon glyphicon-trash"></i> Hapus produk ditandai
              </button>
            </div>


            <hr>

          <table class="table table-bordered table-striped tablesorter" id="myTable">
            <thead>
            <tr>
                <th><center>CEK </center></th>
                <th><center>NO. ORDER <i class="flaticon-show7"></i></center></th>
                <th><center>NAMA PRODUK <i class="flaticon-show7"></i></center></th>
                <th><center>HARGA <i class="flaticon-show7"></i></center></th>
                <th><center>WAKTU<i class="flaticon-show7"></i></center></th>
                <th><center>USER<i class="flaticon-show7"></i></center></th>
                <th><center>AKSI<i class="flaticon-show7"></i></center></th>
            </tr>

            </thead>
            <tbody>
                <?php foreach ($order_log as $data) {?>
            <tr>
            <td><center><input type="checkbox" id="cekbox" name="cekbox[]" value="<?= $data['no_order_log'];?>"/></center></td>

            <td><center><?= $data['no_order'];?></center></td>
            <td><center><?= $data['nama_produk'];?></center></td>
            <td><center><?= $data['harga'];?></center></td>
            <td><center><?= $data['waktu'];?></center></td>
            <td><center><?= $data['pelaku'];?></center></td>
            <td><center><?= $data['action'];?></center></td>
         
            </tr>
               <?php }
?>
            </tbody>
            </table>
             </form>
             <?php echo $pagination;?>
            </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->
		  	</div><!-- /row -->

<!-- Modal Edit -->
  <div class="modal fade" id="modalEditProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Edit Data</h4>
      </div>
      <br>
      <div class="modal-body">
        <form action="<?php echo base_url();?>admin/produk/edit" method="POST">
        <input type="hidden" name="produkid" value="">

          <div class="form-group">
            <input type="text" class="form-control" name="kode" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="nama_produk" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="harga_produk" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="stok_sedia" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="status_produk" value="">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="gambar_produk" value="">
          </div>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-default">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end -->

<!-- Modal Delete Produk-->
<div class="modal fade" id="modalDeleteProduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Delete Data</h4>
      </div>
      <br>
      <div class="modal-body">
        <form action="<?php echo base_url();?>admin/produk/singleDelete" method="POST">
          <input type="hidden" name="produk_id" value="">
          <p>Hapus Data ini ?</p>

        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-default">Ya</button>

      </form>
      </div>
    </div>
  </div>
</div>
<!-- end -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->