<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link type="text/css" rel="stylesheet" href="<?=base_url() . 'asset/user/css/bootstrap.css';?>"/>
    <!--external css-->

    <!-- Custom styles for this template -->
    <link href="<?=base_url() . 'asset/admin/css/login.css';?>" rel="stylesheet">

  </head>

  <body>

     <div class="container">

    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">


        <div class="panel panel-default" >

            <div class="card card-container">
            <center><img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" /></center>
            </div>

<?php if (isset($msg)) {?>
<div class="col-md-12">
    <div id="alert" class="alert alert-danger"><?=$msg?></div>
  </div>
<?php }
?>

        <div class="panel-body" >

        <form name="form" action="<?php echo base_url();?>admin/login/process" id="form" class="form-horizontal" method="POST">
           
            <div class="form-group">
            <div class="col-md-12">
                <input id="user" type="text" class="form-control" name="username" value="" placeholder="username">
            </div>
            </div>
            <div class="form-group">
            <div class="col-md-12">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
            </div>
            </div>
            <div class="checkbox">
            <label>
              <input name="remember" type="checkbox" value="Remember Me"> Ingat Saya
            </label>
            <span class="spacing pull-right"><a href="#"><small> Lupa Password?</small></a><br/></span>
            </div>
            <div class="form-group">
                <!-- Button -->
                <div class="col-sm-12 controls">
                    <button type="submit" class="btn btn-info btn-block">MASUK</button>
                </div>
            </div>
           
        </form>

            </div>
            </div>
        </div>
    </div>
</div>

<div id="particles"></div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url() . 'asset/admin/js/jquery.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/jquery-1.11.2.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/bootstrap.min.js';?>"></script>
    <script src="<?=base_url() . 'asset/admin/js/particleground.js';?>"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->

<script type="text/javascript">
    $("#alert").alert();
    window.setTimeout(function() {
    $("#alert").fadeOut(); }, 3000);
</script>

  </body>
</html>
