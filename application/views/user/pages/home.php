<div class="home-top-page">
 <div class="container">
 <section class="wrapper">

    <div class="col-sm-4 col-md-3 sidebar" id="sidebar-home">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
   
    <ul class="menu">
        <h5><a href="#">KATEGORI </a></h5>
        <li class="kategori"><a href="#">Kamera </a></li>
        <li class="kategori"><a href="#">Tongsis </a></li>
        <li class="kategori"><a href="#">Aksesoris </a></li>
        <li class="kategori"><a href="#">Lainnya </a></li>
       
    </ul>        
  </div>

  <div class="col-md-5" id="slider-home">
      
  <div class="">
  <div class="carousel fade-carousel" data-ride="carousel" data-interval="4000" id="bs-carousel">
  <!-- Overlay -->
  <div class="overlay"></div>

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>
  
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
     
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
     
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
     
    </div>
  </div> 
</div>
</div>

<div class="col-md-6 box-slider">
  <b>COD</b>
  <p>COD ? Kami bisa</p>
  <a href="#" class="btn btn-primary btn-sm">Selengkapnya</a>
</div>

<div class="col-md-6 box-slider">
  <b>SEWA KAMERA</b>
  <p>Sewa juga bisa</p>
  <a href="<?php echo base_url();?>produk/rent/" class="btn btn-primary btn-sm">Selengkapnya</a>
</div>

  </div>

  <div class="col-md-4 well">

    <div class="col-md-12 box-right">
      <img src="/sjpro/asset/user/img/box.png" class="img-responsive">
    </div>

    <div class="col-md-12 box-right">
      <hr>
      <p>Kami menyediakan berbagai macam action cam sesuai dengan kebutuhan.
        Dokumentasikan setiap momen perjalanan Anda dengan produk action cam dari Sjpro Store.
        Action cam ? Sjpro Store aja.</p>
      <a href="<?php echo base_url();?>produk/item/" class="btn btn-primary btn-sm btn-block">Selengkapnya</a>
    </div>

  </div>

  </section>
</div>
</div>



<div class="container" >
<section id="main-content">

<div class="row">

<?php if($this->session->flashdata('error')) { ?>
<div class="col-md-12">
  <div class="alert alert-danger"><center>
  <?php echo $this->session->flashdata('error'); ?>
  </center>
  </div>
</div>
<?php } ?>


<?php foreach ($produk as $data) {?>

    <div class="col-md-3 col-sm-6">
    <div class="col-item">
    <a href="<?php echo base_url('produk/item/detail/' . $data['id_produk']);?>">
    <div class="photo">
        <img src="<?php echo base_url();?>asset/user/img/produk/<?php echo $data['gambar'];?>" class="img-responsive" alt="" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <p><?php echo $data['nama_produk'];?></p>
            <p id="price-text-color">Rp.<?=number_format($data['harga_produk'], 2, ',', '.')?></p>
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


<div class="row">
  
  <div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
  <div class="carousel-inner">

<?php
$item_class = ' active';
foreach ($top->result() as $data): 
?>

    <div class="item<?= $item_class; ?>">

    <div class="col-md-3 col-sm-6">
    <div class="col-item">
    <a href="<?= base_url('produk/item/detail/' . $data->id_produk);?>">
    <div class="photo">
        <img src="<?= base_url();?>asset/user/img/produk/<?= $data->gambar?>" class="img-responsive" alt="a" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <p><?= $data->nama_produk?></p>
            <p class="price-text-color">Rp.<?= number_format($data->harga_produk, 0, ',', '.')?></p>
        </div>

    </div>
        <div class="clearfix">
        </div>
    </div>
    </a>
    </div>
    </div>

    </div>

    
<?php  
$item_class = '';
endforeach;
?>

</div>
</div>
</div>

    <div class="row">

    

    	<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">

  <div class="carousel-inner">

<?php
$item_class = ' active';
foreach ($rekomendasi->result() as $data): 
?>
    <div class="item<?= $item_class; ?>">
    <div class="col-md-3 col-sm-6">
    <div class="col-item">
     <a href="<?= base_url('produk/item/detail/' . $data->id_produk);?>">


    <div class="photo">
        <img src="<?= base_url();?>asset/user/img/produk/<?= $data->gambar?>" class="img-responsive" alt="a" />
    </div>
    <div class="info">
        <div class="row">
            <div class="price col-md-12">
            <p><?= $data->nama_produk?></p>
            <p id="price-text-color">Rp.<?= number_format($data->harga_produk, 0, ',', '.')?></p>
        </div>

    </div>
        <div class="clearfix">
        </div>
    </div>
     </a>
    </div>
    </div>
    </div>
    
<?php  
$item_class = '';
endforeach;
?>

   
  </div>
</div>


    </div>

    </div>
    </div>


 
</section>
</div>




