<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SJPRO-STORE ADMIN</title>

    <!-- Bootstrap core CSS -->
    <link rel="shortcut icon" href="<?=base_url() . 'asset/user/img/minilogo-32.png'?>"/>

    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/admin/css/bootstrap.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/bootstrapValidator.min.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/jquery-ui.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/icon/flaticon.css';?>"/>
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/admin/css/color-scheme.css';?>"/>
    <!--external css-->

    <!-- Custom styles for this template -->
    <link href="<?=base_url() . 'asset/admin/css/style.css';?>" rel="stylesheet">
    <link href="<?=base_url() . 'asset/admin/css/style-responsive.css';?>" rel="stylesheet">

     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.1/angular.min.js"></script>

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

<section id="container" >

  <body>
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="flaticon-show5" id="SlideBar" data-placement="right" data-original-title="Menu Navigasi"></div>
            </div>
            <!--logo start-->

            <!--logo end-->

            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                   <li><a class="logout tooltips" href="<?php echo base_url();?>admin/akun/logout" data-placement="left" data-original-title="Keluar"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->





