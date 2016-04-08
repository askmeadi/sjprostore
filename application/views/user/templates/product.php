 
 <div id="coba" class="row grid">
      <?php foreach ($produk as $data) {?>
    <div class="col-xs-6 col-sm-4 col-md-4">
        <div id="col-item" class="col-item element-item transition metal" data-category="transition">
    <a href="<?= base_url('produk/item/detail/' . $data->id_produk);?>">
    <div class="photo">
        <img src="<?= base_url();?>asset/user/img/produk/<?php echo $data->gambar?>" class="img-responsive" alt="" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <h5 class="name"><?= $data->nama_produk ?></h5>
            <span id="price-text-color">Rp.</span>
            <span class="number" id="price-text-color"><?=number_format($data->harga_produk, 0, ',', '.')?></span>
        </div>

    </div>
        <div class="clearfix">
        </div>
    </div>
    </a>
    </div>
      </div>
       <?php }
?>

     </div>
