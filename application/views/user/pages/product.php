<?php
if (isset($breadcrumb) && is_array($breadcrumb) && count($breadcrumb) > 0) {
	?>
    <ul class="breadcrumb">
     <i class="flaticon-front17"></i>
      <?php
foreach ($breadcrumb as $key => $value) {
		if ($value != '') {
			?>
      <li><a href="<?php echo $value;?>"><?php echo $key;?></a> <span class="divider"></span></li>
      <?php } else {?>
      <li class="active"><?php echo $key;?></li>
      <?php }
	}
	?>
      </ul>
      <?php
}
?>

    <div class="row">
    <div class="col-md-3">

          <div class="col-filter">
            <span id="filter-title">Brand</span>
            <div class="filter-wrapper">
              <ul class="list-unstyled">
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">GoPro</span> <span class="filter-count">(4)</span></span></label>
              </li>
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">SJCam</span> <span class="filter-count">(4)</span></span></label>
              </li>
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">Yunteng</span> <span class="filter-count">(4)</span></span></label>
              </li>
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">Atanta</span> <span class="filter-count">(4)</span></span></label>
              </li>
              </ul>
            </div>
          </div>

          <div class="col-filter">
            <span id="filter-title">Harga</span>
            <div class="filter-wrapper">
              <ul class="list-unstyled">
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">Rp. 0K - Rp. 150K</span> <span class="filter-count">(4)</span></span></label>
              </li>
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">Rp. 0K - Rp. 150K</span> <span class="filter-count">(4)</span></span></label>
              </li>
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">Rp. 0K - Rp. 150K</span> <span class="filter-count">(4)</span></span></label>
              </li>
              <li>
              <label><input type="checkbox" value="accessgo">
              <span><span class="filter-name">Rp. 0K - Rp. 150K</span> <span class="filter-count">(4)</span></span></label>
              </li>
              </ul>
            </div>
          </div>

      </div>


    <div class="col-md-9">
    <div class="row">

      <div class="col-md-7 pull-right">
        <!-- <select class="form-control" id="selectBerdasar">
          <option>Produk Terbaru</option>
          <option>Produk Terpopuler</option>
          <option value="termahal">Harga Termahal</option>
          <option value="termurah">Harga Termurah</option>
          <option value="alfabet">Alfabet A-Z</option>
        </select>-->

<div class="button-group sort-by-button-group">
  <span id="filter-title"><b>Urut Berdasarkan : </b></span>
  <button class="btn btn-default btn-sm" data-sort-by="original-order">Default</button>
  <button class="btn btn-default btn-sm" data-sort-by="name">Alphabet</button>
  <button class="btn btn-default btn-sm" data-sort-by="number">Harga</button>
</div>

      </div>
    </div>

    <div class="row grid">

<?php if (empty($results)) {
	echo '
  <div class="col-md-12">
   <div id="panel-notfound" class="alert alert-danger"> <h4>Oopsss...</h4><p>Maaf, data yang anda cari tidak di temukan.</p></div></div>';
} else {?>

<?php foreach ($results as $row) {?>

    <div class="col-xs-6 col-sm-4 col-md-4">
		<div class="col-item" class="col-item element-item transition metal" data-category="transition">
    <a href="">
    <div class="photo">
        <img src="<?php echo base_url();?>asset/user/img/produk/<?php echo $row->gambar?>" class="img-responsive" alt="" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <h5 class="name"><?php echo $row->nama_produk?></h5>
            <h5 class="number" id="price-text-color"><?=number_format($row->harga_produk, 2, ',', '.')?></h5>
        </div>

    </div>
        <div class="clearfix">
        </div>
    </div>
    </a>
    </div>
    </div>

<?php }}
?>

    </div>
<!-- 
    <?php echo $pagination;?> -->

	</div>
    </div>

<!-- </div> -->

 </section>
</section>
</div>