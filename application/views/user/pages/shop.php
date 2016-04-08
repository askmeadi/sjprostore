<div class="container" >
<section id="main-content">
  <section class="wrapper">

		<div class="row">

      <div class="col-md-3">

          <div class="col-filter">
            <span id="filter-title">Brand</span>
            <div class="filter-wrapper" id="filters">
            <form method="post">
              <ul class="list-unstyled">

<?php foreach ($brand as $data) : ?>

              <li>
              <label><input type="checkbox" name="bcheck" class="bcheck" value="<?= $data['id_brand'] ?>" >
              <span><span class="filter-name">&nbsp; <?= $data['brand'] ?></span> <span class="filter-count"></span></span></label>
              </li>
  
<?php endforeach; ?>

              </ul>
              </form>
            </div>
          </div>
     
      </div>

			<div class="col-md-9">

      <div class="row">
      <div class="col-md-7 pull-right">

<div class="button-group sort-by-button-group" id="col-filter-top">
  <span id="filter-title"><b>Urut Berdasarkan : </b></span>
  <button class="btn btn-default btn-sm" data-sort-by="original-order">Default</button>
  <button class="btn btn-default btn-sm" data-sort-by="name">Alphabet</button>
  <button class="btn btn-default btn-sm" data-sort-by="number">Harga</button>
</div>

      </div>
    </div>

<?php if(!$produk):
    echo '<div class="row"><div class="col-md-12">
   <div id="panel-notfound" class="alert alert-danger"> <h4>Oopsss...</h4><p>Maaf, produk/barang tidak tersedia</p></div></div></div>';
else:
?>

    <div id="coba" class="row grid">

    <?php foreach ($produk as $data) {?>

    <div class="col-xs-6 col-sm-4 col-md-4">
		<div id="col-item" class="col-item element-item transition metal" data-category="transition">
    <a href="<?php echo base_url('produk/item/detail/' . $data['id_produk']);?>">
    <div class="photo">
        <img src="<?php echo base_url();?>asset/user/img/produk/<?php echo $data['gambar'];?>" class="img-responsive" alt="" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <p class="name"><?php echo $data['nama_produk'];?></p>
            <span id="price-text-color">Rp.</span>
            <span class="number" id="price-text-color"><?=number_format($data['harga_produk'], 0, ',', '.')?></span>
        </div>

    </div>
        <div class="clearfix">
        </div>
    </div>
    </a>
    </div>
    </div>

  <?php }?>
 <?php endif;?>
 
    </div>

  <!-- <div class="grid">
  <div class="element-item transition metal" data-category="transition">
    <p class="number">79</p>
    <h3 class="symbol">Au</h3>
    <h2 class="name">Gold</h2>
    <p class="weight">196.966569</p>
  </div>
  <div class="element-item metalloid" data-category="metalloid">
    <p class="number">51</p>
    <h3 class="symbol">Sb</h3>
    <h2 class="name">Antimony</h2>
    <p class="weight">121.76</p>
  </div>
  
</div>
 -->
       <?php echo $pagination;?>

		</div>

		</div>

<!-- </div> -->

 </section>
</section>
</div>