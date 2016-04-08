  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  	<div class="col-lg-12">
          <div class="content-panel">

          <section id="unseen">

          <div class="form-group">
              <a href="<?= base_url('admin/produk/tambah_produk');?>" class="btn btn-info">
                <i class="glyphicon glyphicon-plus"></i> Tambah produk
              </a>
          </div>

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

            <form action="<?= base_url('admin/produk/delete');?>" method="post"> 
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
                <th><center>KODE <i class="flaticon-show7"></i></center></th>
                <th><center>NAMA PRODUK <i class="flaticon-show7"></i></center></th>
                <th><center>HARGA <i class="flaticon-show7"></i></center></th>
                <th><center>STOK <i class="flaticon-show7"></i></center></th>
           <!--      <th><center>STATUS PRODUK <i class="flaticon-show7"></i></center></th> -->
                <th><center>GAMBAR </center></th>
                <th><center>AKSI </center></th>
            </tr>

            </thead>
            <tbody>
                <?php foreach ($produk as $data) {?>
            <tr>
            <td><center><input type="checkbox" id="cekbox" name="cekbox[]" value="<?= $data['id_produk'];?>"/></center></td>

            <td><center><?= $data['kode_produk'];?></center></td>
            <td><center><?= $data['nama_produk'];?></center></td>
            <td><center><?= $data['harga_produk'];?></center></td>
             <td><center><?= $data['stok'];?></center></td>

          <!--   <td><center><a href="#" class="status_produk" data-toggle="modal" data-idproduk="<?= $data['id_produk'];?>" 
                          data-target="#edit-statusprod"><?=$data['status_produk'];?>
            </a></center></td> -->

            <td class="photo"><center>
              <img src="<?= base_url();?>asset/user/img/produk/<?php echo $data['gambar'];?>" class="img-responsive" id="admin-img" />
            </center></td>

            <td><center>
            <a href="<?= base_url().'admin/produk/hapus/'.$data['id_produk']."/".$data['gambar']."/".$data['id_kategori'];?>" class="btn btn-danger btn-xs"  onclick="return confirm('Apakah anda yakin ?')" >
             <i class="glyphicon glyphicon-trash"></i>
            </a>
            <a id="edit_produk" class="btn btn-default btn-xs" href="<?= base_url()."admin/produk/edit_produk/".$data['id_produk']; ?>">
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


