<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title?> | Sj-Pro Store</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="<?=base_url() . 'asset/user/img/minilogo-32.png'?>"/>

    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/bootstrap.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/icon/flaticon.css';?>"/>

    <!--external css-->
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/bootstrapValidator.min.css';?>"/>
    <!-- Custom styles for this template -->
    <link href="<?=base_url() . 'asset/user/css/pagestyle.css';?>" rel="stylesheet">
    <link href="<?=base_url() . 'asset/user/css/pagestyle-responsive.css';?>" rel="stylesheet">

     <script type="text/javascript">
      document.onreadystatechange = function () {
      var state = document.readyState
      if (state == 'interactive') {
      document.getElementById('container').style.visibility="hidden";
      } else if (state == 'complete') {
      setTimeout(function(){
         document.getElementById('interactive');
         document.getElementById('loader').style.visibility="hidden";
         document.getElementById('container').style.visibility="visible";
      },1000);
  }
}
    </script>


  </head>

<div id="loader"></div>

  <body>


  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container" >

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>produk/itemcollection"><img src="<?=base_url() . 'asset/user/img/logo.png'?>" class="img-responsive"></a>
    </div>


    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


      <ul class="nav navbar-nav navbar-right">

      </ul>

    </div>
  </div>
</nav>









