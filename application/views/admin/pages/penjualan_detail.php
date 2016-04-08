<!--main content start-->
  <section id="main-content">
    <section class="wrapper">
    	
		<div class="row mt">
				<div class="col-lg-12">
        <div class="content-panel">

            <section id="unseen">

          <div class="row">

<?php foreach ($detail as $value): ?>

          <div class="col-xs-12 col-sm-12 col-md-12">
        
          <div class="row">

          <div class="col-sm-3 col-md-3">
              <img src="<?= base_url();?>asset/user/img/produk/<?= $value['gambar'];?>" class="img-responsive"/>
              <div class="carousel-caption">
                <span class="label label-success">STOK TERSEDIA</span>
              </div>
          </div>

          <div class="col-sm-9 col-md-9">

              <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Pembeli</h3>
                  <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
              </div>
              <div class="panel-body">
              <div class="product-title"><?= $value['nama']; ?></div>
              <div class="det-alamat"><?= $value['alamat']; ?>, <?= $value['nama_kelurahan']; ?>, <?= $value['nama_kecamatan']; ?> 
                , <?= $value['nama_kabupaten']; ?>, <?= $value['nama_provinsi']; ?> <i class="glyphicon glyphicon-map-marker"></i></div>
              </div>
              </div>

              <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Produk</h3>
                  <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
              </div>
              <div class="panel-body">
                  <div class="product-title"><?=$value['nama_produk'];?></div>
                  <div class="product-price">Rp.<?=number_format($value['harga'], 0, ',', ',')?></div>
              </div>
              </div>

              <div class="panel panel-default">
              <div class="panel-heading">
                  <h3 class="panel-title">Data Faktur</h3>
                  <span class="pull-right clickable"><i class="glyphicon glyphicon-minus"></i></span>
              </div>
              <div class="panel-body">
                  <div class="product-price">Order Key : <?=$value['order_key'];?></div>
                  <div class="product-price">Status Transaksi : <?=$value['status'];?></div>
                  <div class="product-stock">Tenggat Pembayaran : <?=$value['due_date']; ?></div>
              </div>
            </div>
              <div class="pull-right">
                <a href="<?= base_url()."admin/penjualan/"?>" type="button" class="btn btn-danger">
                  <i class="glyphicon glyphicon-step-backward"></i> Back 
                </a>
              </div>
          </div>
          </div>
            
        </div>

<?php endforeach;?>

          </div>

            </section>
        </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->
		</div><!-- /row -->

		</section><! --/wrapper -->
  </section><!-- /MAIN CONTENT -->


