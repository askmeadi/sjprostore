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
<?php }?>

<?php if($this->session->flashdata('error')) { ?>

<div class="alert alert-danger"><center>
<?php echo $this->session->flashdata('error'); ?>
</center>
</div>
<?php } ?>

        <form action="<?= base_url('admin/penjualan/delete');?>" method="post"> 
            <div class="form-group">
              <button type="submit" class="btn btn-danger" value="action">
                <i class="glyphicon glyphicon-trash"></i> Hapus produk ditandai
              </button>
            </div>

            <hr>

          <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th><center>CEK</center></th>
                <th><center>No.</center></th>
                <th><center>Detail</center></th>
                <th><center>Produk</center></th>
               <!--  <th class="numeric"><center>Jumlah</center></th> -->
                <th class="numeric"><center>Batas Pembayaran</center></th>
                <th class="numeric"><center>Biaya</center></th>
                <th class="numeric"><center>Status</center></th>
            </tr>

            </thead>
            <tbody>

<?php $i = 1; ?>
<?php foreach ($full_order as $data):?>

          <tr>
            <td><center><input type="checkbox" id="cekbox" name="cekbox[]" value="<?= $data['no_order'];?>"/></center></td>
            <td><center><?=$i;?></center></td>
            <td><center>
              <a class="btn btn-default btn-sm" href="<?= base_url()."admin/penjualan/detail/".$data['no_order']; ?>">
              <i class="glyphicon glyphicon-share-alt"></i></a>
            </center></td>
            <td><center><?=$data['nama_produk'];?></center></td>
     
            <td class="numeric"><center><?=$data['due_date'];?></center></td>
            <td class="numeric"><center>Rp.<?=number_format($data['harga'], 0, ',', ',')?></center></td>
            <td class="numeric"><center><a href="#" class="status_order" data-toggle="modal" 
              data-idfaktur="<?= $data['no_order'];?>" data-target="#edit-status">
                <?=$data['status'];?></a></center>
            </td>
          </tr>
<?php $i++; ?>
<?php endforeach;?>


                    </tbody>
                </table>
              </form>

              <span class="pull-right">
             <form action="<?= base_url()."admin/rptpdf/order" ?>" method="post" target="_blank">
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


