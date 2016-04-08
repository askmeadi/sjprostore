<div class="container" >
<section id="main-content">
  <section class="wrapper">

<div class="process">
    <div class="process-row">
        <div class="process-step">
            <button type="button" class="btn btn-info btn-circle" disabled="disabled"><i class="flaticon-write20"></i></button>
            <p>EMAIL ID</p>
        </div>
        <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="flaticon-user158"></i></button>
            <p>PENGIRIMAN</p>
        </div>
         <div class="process-step">
            <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="flaticon-tick7"></i></button>
            <p>PEMBAYARAN</p>
        </div> 
    </div>
</div>

<div class="row">

<div class="col-md-9">
	<div class="col-payment-data-first">
		<form class="form-horizontal col-md-offset-3" id="form-checkout-email">
		<div class="form-group">
	      <div class="col-lg-8">
	        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email">
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-8">
	        <div class="radio">
	          <label>
	            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="" onclick="disable()">
	            Pelanggan baru
	          </label>
	        </div>
	        <div class="radio">
	          <label>
	            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" onclick="undisable()">
	            Saya adalah pelanggan tetap
	          </label>
	        </div>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-8">
	        <input type="password" name="pass" class="form-control" id="inputPass" placeholder="Password" disabled="">
	      </div>
	    </div>

	    <div class="form-group">
	    	<div class="col-lg-8">
	    		<button type="submit" class="btn btn-primary btn-block">Lanjutkan</button>
	    	</div>
	    </div>

	     <div class="form-group">
	    <div class="col-lg-8">
	    <div class="unit or-divider">
	    	<div class="inner">
	    		<div class="loginReg_or">OR</div>
	    	</div>
	    </div>
	    </div>
	     </div>

	    <div class="form-group">
	    <div class="col-lg-8">
	    <div class="social-buttons">
	      <a href="#" class="btn btn-fb btn-block"> Masuk dengan akun Facebook</a>
	  	</div>
	  	</div>
	  	</div>
	</form>
	</div>
</div>

<div class="col-md-3">

<div class="col-payment-data-detail">
<div class="panel panel-default">
  <div class="panel-heading">Detail Order</div>
  <div class="panel-body">
    <?php if(!$this->cart->contents()):
    echo '<div class="row">
      <div class="col-lg-12 info-item">
        <span><center>Keranjang anda kosong, silahkan tambah produk terlebih dahulu <a href="<?=base_url();?>produk/item/">disini</a></center></span>
      </div>
      </div>';
else:
?>

   <table class="col-md-12 ">
      <tbody>

<?php
$i = 0;
foreach ($this->cart->contents() as $items):
  $i++;
  ?>

          <tr>
             <td class="h5"><strong>Nama</strong></td>
             <td class="pull-right"><?=$items['name'];?></td>
          </tr>
          <tr>
             <td class="h5"><strong>Harga</strong></td>
             <td class="pull-right">Rp.<?=$items['price'];?></td>
          </tr>
          <tr>
             <td class="h5"><strong>Jumlah</strong></td>
             <td class="pull-right"><?=$items['qty'];?></td>
          </tr>
          
<?php endforeach;?>
		 <tr>
             <td class="h5"><strong>Total</strong></td>
             <td class="pull-right">Rp.<?=number_format($this->cart->total(), 0, ',', ','); ?></td>
          </tr>


      </tbody>
    </table>


<?php endif;
?>
  </div>
</div>
</div>

</div>

</div>

 </section>
</section>
</div>