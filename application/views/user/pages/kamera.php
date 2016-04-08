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

      <div class="col-md-4 pull-right">
        <select class="form-control" id="selectBerdasar">
         <!--  <option>Produk Terbaru</option>
          <option>Produk Terpopuler</option> -->
          <option value="termahal">Harga Termahal</option>
          <option value="termurah">Harga Termurah</option>
          <option value="alfabet">Alfabet A-Z</option>
        </select>
      </div>
    </div>


      <div class="row">
        <?php foreach ($produk as $data) {?>
      <div class="col-xs-6 col-sm-4 col-md-4">
		<div class="col-item">
    <a href="<?php echo base_url('produk/item/detail/' . $data['id_produk']);?>">
    <div class="photo">
        <img src="<?php echo base_url();?>asset/user/img/produk/<?php echo $data['gambar'];?>" class="img-responsive" alt="" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <h5><?php echo $data['nama_produk'];?></h5>
            <h5 class="price-text-color">Rp.<?php echo $data['harga_produk'];?></h5>
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

      <!--  <?php echo $pagination;?> -->

		</div>

		</div>

<!-- </div> -->

 </section>
</section>
</div>