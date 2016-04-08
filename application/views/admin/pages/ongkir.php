  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  	<div class="col-lg-12">
          <div class="content-panel">

          <section id="unseen">

        <!--   <div class="form-group">
              <a href="<?= base_url('admin/produk/tambah_produk');?>" class="btn btn-info">
                <i class="glyphicon glyphicon-plus"></i> Tambah produk
              </a>
          </div>
 -->
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

            <form action="<?= base_url('admin/ongkir/delete');?>" method="post"> 
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
                <th><center>KODE KOTA<i class="flaticon-show7"></i></center></th>
                <th><center>KABUPATEN <i class="flaticon-show7"></i></center></th>
                <th><center>BIAYA <i class="flaticon-show7"></i></center></th>
                <th><center>ESTIMASI (HARI)<i class="flaticon-show7"></i></center></th>
                <th><center>AKSI </center></th>
            </tr>

            </thead>
            <tbody>
                <?php foreach ($ongkir as $data) {?>
            <tr>
            <td><center><input type="checkbox" id="cekbox" name="cekbox[]" value="<?= $data['id_ongkir_jne'];?>"/></center></td>

            <td><center><?= $data['city_code'];?></center></td>
            <td><center><?= $data['kota_kabupaten'];?></center></td>
            <td><center><a href="#" class="status_produk" data-toggle="modal" data-idongkir="<?= $data['id_ongkir_jne'];?>" 
                          data-target="#edit-ongkir"><?= $data['reguler'];?>
            </a></center></td>
            <td><center><?= $data['etd_reguler'];?></center></td>

           
            <td><center>
            <a href="<?= base_url().'admin/ongkir/hapus/'.$data['id_ongkir_jne'];?>" class="btn btn-danger btn-xs"  onclick="return confirm('Apakah anda yakin ?')" >
             <i class="glyphicon glyphicon-trash"></i>
            </a>
            <a id="edit_produk" class="btn btn-default btn-xs" href="<?= base_url()."admin/ongkir/edit_ekspedisi/".$data['id_ongkir_jne']; ?>">
            <i class="glyphicon glyphicon-pencil"></i>
            </a>
            </center></td>
            </tr>
               <?php }
?>
            </tbody>
            </table>
             </form>

            <span class="pull-right">
             <form action="<?= base_url()."admin/rptpdf/" ?>" method="post" target="_blank">
              <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-print"></i> Cetak</button>
             </form>
             </span>

             <?php echo $pagination;?>

            </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->
		  	</div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

<!-- modal edit ongkir -->
<div class="modal fade" id="edit-ongkir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
        
            <div class="label label-success">
              <strong>Ongkos Kirim :</strong>
            </div>
            <form class="form-horizontal" action="<?= base_url();?>admin/ongkir/edit_ongkir" id="form-ongkir" method="POST">
            <input type="hidden" name="idongkir" value="">
            <div class="input-group">
              <input class="form-control" type="text" name="biaya">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-ok"></i></button>
              </span>
            </div>
          </form>
  
          </div>
          </div>
</div>
<!-- end -->


