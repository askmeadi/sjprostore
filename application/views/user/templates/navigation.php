<div class="container" >
<section id="main-content">
  <section class="wrapper">

<div class="navbar navbar-default" id="subnav">
    <div class="col-md-12">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>

      <ul class="nav navbar-nav">
      <li class="dropdown mega-dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown">Kategori <span class="caret"></span></a>

        <ul class="dropdown-menu mega-dropdown-menu row">

          <li class="col-sm-2">
            <ul>
              <li class="dropdown-header">Kamera</li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/gopro">Gopro</a></li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/sjcam">Sjcam</a></li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/yicam">Yicam</a></li>
            </ul>
          </li>
          <li class="col-sm-2">
            <ul>
              <li class="dropdown-header">Monopod</li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/atanta">Atanta</a></li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/tmc">TMC</a></li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/yunteng">Yunteng</a></li>
            </ul>
          </li>
          <li class="col-sm-3">
            <ul>
              <li class="dropdown-header">Aksesoris</li>
              <li><a href="<?=base_url();?>produk/itemcollection/getKamera/lainnya">Semua</a></li>
            </ul>
          </li>
          <li class="col-sm-5">
            <ul>
              <li class="dropdown-header">Newsletter</li>
                <form class="form" id="form-subscribe" action="<?=base_url();?>user/data/ajax_subscribe" method="POST">
                  <div class="form-group">
                    <label class="sr-only" for="email">Email address</label>
                    <input type="email" class="form-control" id="email-subscribe" name="email-subscribe" placeholder="Enter email">
                  </div>
                  <button type="submit" class="btn btn-primary btn-block">Subscribe</button>
                  <i id="response"></i>
                </form>
                
            </ul>
          </li>
        </ul>

      </li>
      </ul>

        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse2">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url();?>produk/item/">Belanja Sekarang</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cek Status Pesanan</a>
             <ul class="dropdown-menu" id="drop-header">
                <form class="form-horizontal" role="form" action="<?= base_url('produk/filter/track_order');?>" method="POST">
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input class="form-control" type="text" name="orderkey" id="orderkey" placeholder="No. Order"/>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-search" aria-hidden="true">
                  </span>
                   Cari </button>
                </form>
              </ul>
            </li>
          </ul>

        </div>
     </div>
</div>
