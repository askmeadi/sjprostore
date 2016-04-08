  <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

		  		<div class="row mt">
			  		<div class="col-lg-12">
            <div class="content-panel">

          <section id="unseen">

           <form action="<?= base_url('admin/produk/delete');?>" method="post"> 
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
                <th><center>NO.</center></th>
                <th><center>NAMA</center></th>
                <th><center>ALAMAT</center></th>
                <th><center>EMAIL</center></th>
                <th><center>TELEPON</center></th>
                <th><center>AKSI</center></th>
            </tr>

            </thead>
            <tbody>
              <?php $i = 1; ?>
                <?php foreach ($pelanggan as $data): ?>
            <tr>
            <td><center><input type="checkbox" id="cekbox" name="cekbox[]" value="<?= $data['id_pelanggan'];?>"/></center></td>
            <td><center><?=$i;?></center></td>
            <td><center><?php echo $data['nama'];?></center></td>
            <td><center><?php echo $data['alamat'];?></center></td>
            <td><center><?php echo $data['email'];?></center></td>
            <td><center><?php echo $data['telepon'];?></center></td>
            <td><center><button class="btn btn-danger btn-xs tooltips" data-placement="top" data-original-title="Hapus" data-toggle="modal" data-target="#modalDeletePelanggan"><i class="glyphicon glyphicon-trash"></i></button>
            </td>
            </tr>
              <?php $i++; ?>
               <?php endforeach;?>
            </tbody>
            </table>
            </form>

            <span class="pull-right">
             <form action="<?= base_url()."admin/rptpdf/pelanggan" ?>" method="post" target="_blank">
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