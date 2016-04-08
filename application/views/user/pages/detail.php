<div class="container" >
<section id="main-content">
  <section class="wrapper">
		
		<div class="row">

		<!-- start content -->


		 <?php foreach ($produk as $data):?>
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div id="demo">
				<img src="/sjpro/asset/user/img/produk/<?php echo $data['gambar'];?>"
				data-src="/sjpro/asset/user/img/produk/<?php echo $data['gambar'];?>" class="img-responsive">
				</div>
			</div>

			<div class="col-lg-8 col-md-4 col-sm-4">

				<h3 name="nama"><?php echo $data['nama_produk']?></h3>
				<div class="price-detail">Harga Rp.<span class="price-detail-color" name="harga">
					<?=number_format($data['harga_produk'], 0, ',', ',')?></span></div>


<?php if ($data['stok'] != 0) { ?>
	<span class="label label-success">STOK TERSEDIA</span>
<?php } else { ?>
	<span class="label label-danger">STOK HABIS</span>			
<?php } ?>

				<div class="well well-lg">
			
				<form action="<?=base_url().'produk/shop_cart/coba/'.$data['id_produk']?>" class="form-horizontal" method="POST">
				<input class="hidden" name="product_id" value="<?=$data['id_produk']?>">
			 	<div class="form-group">
			      <label class="col-lg-2 control-label">Jumlah</label>
			      <div class="col-lg-3">
			        <input type="number" max="1" min="1" name="quantity" value="1" class="form-control" size="2" disabled>
			      </div>

<?php if ($data['stok'] == 0) { ?>
	<span class="pull-right">
	<button type="submit" class="btn btn-custom btn-lg disabled" id="detail-cart-btn">
		<i class="glyphicon glyphicon-shopping-cart"></i>
	</button>
	<input type="submit" name="action" class="btn btn-primary btn-lg disabled" value="CHECKOUT" />
	</span>
<?php } else { ?>

	<span class="col-lg-5 pull-right">
	<button type="submit" class="btn btn-custom btn-sm" id="detail-cart-btn">
		<i class="glyphicon glyphicon-shopping-cart"></i>
	</button>
	<input type="submit" name="action" class="btn btn-primary btn-sm" value="CHECKOUT" />
	</span>
<?php } ?>
				</div>

				</form>
				</div>

				<section class="social-share">
					<p>Share :
					<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/sjpro/produk/item/detail/">facebook
					</a>
					<a class="btn btn-social-icon btn-twitter" href="https://twitter.com/home?status=Action%20cam%20recommended%20!!!"> <i href="https://twitter.com/home?status=Action%20cam%20recommended%20!!!"></i>twitter</a></p>
				</section>

				<div class="description">
					<label>Detail Produk</label>
						<li><?= $data['nama_produk']?></li>
						<li>Made in <?= $data['made_produk']?></li>
						<li>Lama Garansi <?= $data['garansi_produk']?></li>
						<li><?= $data['jenis_garansi']?></li>
				</div>

			</div>

			<div class="col-lg-12">

			<?php if ($data['id_kategori'] != 'sjp1'){ ?>

			<ul class="nav nav-tabs">
			  <li class="active"><a href="#desk" data-toggle="tab">Deskripsi</a></li>
			</ul>


			<div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade active in" id="desk">
			  	<?= $data['deskripsi_produk']?>
			  </div>
			</div>

			<?php } else {?>

			<ul class="nav nav-tabs">
			  <li class="active"><a href="#spek" data-toggle="tab">Spesifikasi</a></li>
			  <li><a href="#desk" data-toggle="tab">Deskripsi</a></li>
			</ul>

			<div id="myTabContent" class="tab-content">
			  <div class="tab-pane fade active in" id="spek">
			  	<b>Photo Format : </b>
			  	<li><?= $data['photo_format']?></li>
			  	<b>Video Format : </b>
			  	<li><?= $data['video_format']?></li>
			  	<b>Ports : </b>
			  	<li><?= $data['ports']?></li>
			  	<b>Memory : </b>
			  	<li><?= $data['storage']?></li>
			  	<b>Battery : </b>
			  	<li><?= $data['baterai']?></li>

			  </div>
			  <div class="tab-pane fade" id="desk">
			  	<?= $data['deskripsi_produk']?>
			  	<!-- 4:3 aspect ratio -->
				<div class="embed-responsive embed-responsive-16by9" id="video-review">
<iframe class="embed-responsive-item" src="<?= $data['review']?>" frameborder="0" allowfullscreen></iframe>
				</div>
			  </div>
			</div>

			<?php } ?>

			</div>

	 <?php endforeach;?>

		<!-- end content -->

		<!-- start sidebar -->

		<!-- end sidebar -->

		</div>

 </section>
</section>
</div>
