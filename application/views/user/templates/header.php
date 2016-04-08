<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title?> | Sj-Pro Store</title>
   
    <link rel="shortcut icon" href="<?=base_url() . 'asset/user/img/minilogo-32.png'?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/bootstrap.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/jquery-ui.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/nprogress.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/intlTelInput.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/bootstrapValidator.min.css';?>"/>
    <link href='https://fonts.googleapis.com/css?family=Ruda:400,700,900' rel='stylesheet' type='text/css'>
    <link href="<?=base_url() . 'asset/user/css/pagestyle.css';?>" rel="stylesheet">
    <link href="<?=base_url() . 'asset/user/css/pagestyle-responsive.css';?>" rel="stylesheet">

  </head>

  <body>

<div id="header">
<nav class="navbar-default">
  <div class="container">
   
                    <ul class="nav navbar-nav pull-right top" id="top">
                        <li><a href="#">Blog</a>
                        </li>
                        <li></li>
                        <li><a href="#">Track Order</a>
                        </li>
                        <li></li>
                        <li><a href="#">Customer Service</a>
                        </li>
                        <li ></li>
                        <li class="divider"><a href="#">Sewa Kamera</a>
                        </li>
                    </ul>
               
  </div>
</nav>

<nav class="navbar navbar-default">
  <div class="container">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>produk/itemcollection" class="img-responsive"><img src="<?=base_url() . 'asset/user/img/logo-new.png'?>" class="img-responsive"></a>
    </div>
    
    <div class="navbar-collapse collapse" id="navbar-collapsible">

      
          <ul class="nav navbar-nav navbar-right">
        <li>

<?php
$text_cart_url = '<span class="cart-quantity">' . $this->cart->total_items() . ' </span>
<span class="assets-bag-black"></span> Cart';
?>

<a href="#modal-beli" data-toggle="modal" class="user-info">
            <?php echo $text_cart_url;?>
          </a>


        </li>

        <li class="dropdown">

<?php

if ($this->session->userdata('username')) {

  ?>

<a href="#" class="dropdown-toggle user-info" data-toggle="dropdown">
  <span class="assets-user-black"></span>
  <?php echo substr($this->session->userdata('username'), 0, 5);?> | Akun
</a>
  <ul class="dropdown-menu" id="drop-header">
    <li><a href="<?php echo base_url() . 'user/data/';?>">Data Diri <span class="assets-user-black pull-right"></span>
    </a></li>
    <li class="divider"></li>
    <li><a href="<?php echo base_url() . 'user/account/signout';?>">Keluar <span class="assets-exit-black pull-right"></span></a></li>
  </ul>

<?php
} else {
  ?>

   <a href="#modal-signup" data-toggle="modal" class="user-info"><span class="assets-user-black"></span> Masuk | Daftar</a>

<?php
}
?>


        </li>
      </ul>
     
      
      <form class="box-search" action="<?= base_url('produk/filter/cari');?>" method="POST">
        <div class="form-group" style="display:inline;">
          <div class="input-group kolom-cari">
            <input type="text" class="form-control" name="keyword" id="keyword">
            <span class="input-group-addon"><span class="assets-search-black"></span></span>
          </div>
        </div>
      </form>
      
    </div>
    
  </div>
</nav>
</div>









